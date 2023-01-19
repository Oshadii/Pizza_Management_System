<?php

namespace App\Http\Controllers;
use App\Models\Pizza;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    protected $task;

    public function __construct(){
        $this->task=new order();

    }

    public function index(){
       
        $response['tasks']=$this->task->all();
        return view("pages.Order.index")->with($response);
    }
    public function store(Request $request){
        $this->task->create($request->all());
       // return redirect()->back();
       return redirect()->back();
    }
    public function delete($task_id){
        $task=$this->task->find($task_id);
        $task->delete();
        return redirect()->back();

    }
    public function done($task_id){
        $task=$this->task->find($task_id);
        $task->done=1;
        $task->update();
        return redirect()->back();

    }

}
