<?php

namespace App\Http\Controllers;
use App\Models\Todo;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function todosPage(){


//        Create
//
//        $todo = Todo::create([
//            'title' => 'udwemy js+react',
//            'node' => 'fawst'
//        ]);


            $todo = Todo::find(2);

            /*
            * Изменение  данных
             */

            if ($todo){
                $todo->status = 0;
                $todo->save();
            }

            /*
            * Удаление данных  данных
             */

        if ($todo){
            $todo->delete();
        }
//                 Получение всех строк в таблице

        $todos = Todo::all();


        return view('todos', [
            "todos" => $todos,
        ]);

    }
    public function todosDone(){

        $todos = Todo::where('status', '1')->get();


        return view('todos_done', [
            "todos" => $todos,
        ]);
    }

    public function todosNotDone(){
        $todos = Todo::where('status', '0')->get();
        return view('todos_not_done', [
            "todos" => $todos,
        ]);
    }


}
