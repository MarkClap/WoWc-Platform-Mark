<?php

namespace Database\Seeders;
use App\Models\Quiz;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuizSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Quiz::create([
            'question' => 'What is a database?',
            'answers' => ['A collection of organized data',
            'A type of software application',
            'A network of computers',
            'A storage device'],
            'correct_answer' => 'A collection of organized data',
        ]);

        Quiz::create([
            'question' => 'What are the different types of databases?',
            'answers' => ['Relational, NoSQL, and Hierarchical',
            'SQL, MySQL, and Oracle',
            'Primary, secondary, and tertiary',
            'Local, network, and distributed'],
            'correct_answer' => 'Relational, NoSQL, and Hierarchical',
        ]);

        Quiz::create([
            'question' => 'What is the purpose of a database schema?',
            'answers' => ['To define the structure of a database',
            'To store data in a database',
            'To manage database users and permissions',
            'To query data from a database'],
            'correct_answer' => 'To define the structure of a database',
        ]);

        Quiz::create([
            'question' => 'What is a primary key?',
            'answers' => ['A unique identifier for each record in a table',
            'A column that stores the primary data for a table',
            'A relationship between two tables',
            'An index for a table'],
            'correct_answer' => 'A unique identifier for each record in a table',
        ]);

        Quiz::create([
            'question' => 'What is a foreign key?',
            'answers' => ['A unique identifier for each record in a table',
            'A column that stores the primary data for a table',
            'A relationship between two tables',
            'An index for a table'],
            'correct_answer' => 'A relationship between two tables',
        ]);

        Quiz::create([
            'question' => 'What is SQL?',
            'answers' => ['A programming language for interacting with databases',
            'A type of database',
            'A database management system (DBMS)',
            'A data modeling tool'],
            'correct_answer' => 'A programming language for interacting with databases',
        ]);

        Quiz::create([
            'question' => 'What is the difference between SELECT, UPDATE, INSERT, and DELETE statements in SQL?',
            'answers' => ['SELECT retrieves data from a table, UPDATE modifies existing data, INSERT adds new data, and DELETE removes data.',
            'SELECT is used for data retrieval, UPDATE for data modification, INSERT for data creation, and DELETE for data removal.',
            'SELECT extracts data, UPDATE updates data, INSERT injects data, and DELETE expunges data.',
            'SELECT fetches data, UPDATE alters data, INSERT injects data, and DELETE erases data.'],
            'correct_answer' => 'SELECT retrieves data from a table, UPDATE modifies existing data, INSERT adds new data, and DELETE removes data.',
        ]);

        Quiz::create([
            'question' => 'What is normalization in databases?',
            'answers' => ['The process of organizing data to minimize redundancy and improve data integrity',
            'The creation of indexes to improve query performance',
            'The implementation of security measures to protect data',
            'The conversion of data from one format to another'],
            'correct_answer' => 'The process of organizing data to minimize redundancy and improve data integrity',
        ]);

        Quiz::create([
            'question' => 'What is an index in a database?',
            'answers' => ['A unique identifier for each record in a table',
            'A column that stores the primary data for a table',
            'A relationship between two tables',
            'A structure that speeds up data retrieval'],
            'correct_answer' => 'A structure that speeds up data retrieval',
        ]);

        Quiz::create([
            'question' => 'What is the difference between a database management system (DBMS) and a database?',
            'answers' => ['A DBMS is software that manages and controls a database, while a database is a collection of organized data.',
            'A DBMS is a type of database, while a database is a storage device.',
            'A DBMS is a programming language for interacting with databases, while a database is a data modeling tool.',
            'A DBMS is a network of computers, while a database is a collection of data.'],
            'correct_answer' => 'A DBMS is software that manages and controls a database, while a database is a collection of organized data.',
        ]);
    }
}
