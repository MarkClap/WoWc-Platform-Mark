<?php

namespace App\Http\Controllers;
use App\Models\Quiz;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Character;
use App\Models\Characters_quiz;
use App\Models\Inscription;
use App\Models\Quizzes_History;

class QuizController extends Controller
{

    public function check(Request $request,String $token){

        $course = \App\Models\Course::where('token', $token)->firstOrFail();
        $user = Auth::user();
        
        // Find inscription for this specific course
        $inscription = Inscription::where('id_user', $user->id)
                                  ->where('id_course', $course->id)
                                  ->first();

        if (!$inscription) {
            return redirect()->back()->with('error', 'No estás inscrito en este curso.');
        }

        $character = Character::where('id_inscription', $inscription->id)->first();

        if (!$character) {
             return redirect()->back()->with('error', 'Personaje no encontrado.');
        }

        $correctAnswers = 0;
        $answers = $request->input('answerselected', []); // Default to empty array

        foreach ($answers as $Id => $selectedAnswer) {
            $quiz = Quiz::find($Id);
            if (!$quiz) continue; // Skip if quiz question not found

            $isCorrect = $quiz->correct_answer === $selectedAnswer;
            
            if ($isCorrect) {
                $correctAnswers++;
            }

            Characters_quiz::create([
                'id_character' => $character->id,
                'id_quiz' => $quiz->id,
                'result' => $isCorrect ? 'correct' : 'incorrect'
            ]);
        }

        $result = count($answers) > 0 ? ($correctAnswers / count($answers)) * 20 : 0; // Assuming 20 scale or just logic? 
        // Original logic: ($correctAnswers / 10) * 100. Assuming 10 questions?
        // Let's stick to original logic but safer
        $result = ($correctAnswers / 10) * 100;

        // Logic for history (attempt counter)
        $latestHistory = Quizzes_History::where('id_character', $character->id)
                                        ->orderBy('created_at', 'desc')
                                        ->first();
        
        $nextQuizNumber = $latestHistory ? $latestHistory->quiz + 1 : 1;

        Quizzes_History::create([
            'id_character' => $character->id,
            'score' => $result,
            'quiz' => $nextQuizNumber, 
        ]);


        return redirect()->route('player.character', ['token' => $token]);
    }


}
