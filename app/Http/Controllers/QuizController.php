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

    public function check(Request $request,string $token){

        $i =1;
        
        $User = Auth::user()->id;
        $inscription = Inscription::find($User);
        $character = Character::where('id_inscription', $inscription->id)->first();
        $correctAnswers = 0;

        foreach ($request->input('answerselected') as $Id => $selectedAnswer) {
            $quiz = Quiz::find($Id);
            if ($quiz->correct_answer === $selectedAnswer) {
                $correctAnswers++;

                Characters_quiz::create([
                    'id_character' => $character->id,
                    'id_quiz' => $quiz->id,
                    'result' => 'correct'
                ]);
            }

            else{
                Characters_quiz::create([
                    'id_character' => $character->id,
                    'id_quiz' => $quiz->id,
                    'result' => 'incorrect'
                ]);
            }
        }

        $result = ($correctAnswers / 10) * 100;

        $characterlastquiz = Quizzes_History::where('id_character', $character->id)
        ->orderBy('created_at', 'desc')
        ->get();

        if ($characterlastquiz->isNotEmpty()){
            $latestQuiz = $characterlastquiz->first();
            $characterlastquiz = $latestQuiz->quiz;

            Quizzes_History::create([
                'id_character' => $character->id,
                'score' => $result,
                'quiz'=> $characterlastquiz+1
            ]);
        }

        else{
            Quizzes_History::create([
            'id_character' => $character->id,
            'score' => $result,
            'quiz' => 1,
            ]);
        }


        return redirect()->route('player.character', ['token' => $request->token]);
    }


}
