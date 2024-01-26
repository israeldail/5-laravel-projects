<?php

namespace App\Livewire;

use Livewire\Component;
use \App\Models\TodoItem;

class TodoList extends Component
{   //variable for todo items
    public $todos;
    //storing todo's as text
    public string $todoText = "";

    public function mount(){
        //mount function that runs once
        $this->selectTodos();
    }
    public function render()
    {
        return view('livewire.todo-list')
        ->layout('layouts.app');
    }

    public function addTodo(){
        //makes a new todo item with properties from the table
        $todo = new TodoItem();
        //the todo property is assigned the input value
        $todo->todo = $this->todoText;
        //completed starts as false
        $todo->completed = false;
        //add todo to DB
        $todo->save();

        //clear input field
        $this->todoText = '';
        //get updated todo list
        $this->selectTodos();
    }

    public function toggleTodo($id){
        // toggle state of completion whether true or false
        $todo = TodoItem::where('id', $id)->first();
        if(!$todo){
            return;
        }
        $todo->completed = !$todo->completed;
        $todo->save();
        //get updated todo list
        $this->selectTodos();
    }

    public function deleteTodo($id){
        //delete a todo item based on the ID
        $todo = TodoItem::where('id', $id)->first();
        if(!$todo){
            return;
        }
        $todo->delete();
        //get updated todo list
        $this->selectTodos();
    }

    public function selectTodos(){
        //get's all todos by time created in descending order; assigns todos variable with this array which is then iterable using a for loop
        $this->todos = TodoItem::orderBy('created_at','desc')->get();
    }
}
