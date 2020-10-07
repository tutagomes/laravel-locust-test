<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

/**
 * @group  Todo V2
 *
 * APIs para controlar tarefas - versão 2
 */
class TodoControllerV2 extends Controller
{
    public static function delay () {
        return rand(0, 20) / 10;
    }
    /**
	 * Mostra todas as tarefas
	 *
	 * @response [{
     *   "id": 143,
     *   "created_at": "2020-10-07T18:55:09.000000Z",
     *   "updated_at": "2020-10-07T18:55:09.000000Z",
     *   "title": "Lorem Ipsum",
     *   "description": "Dolor sit amet",
     *   "notes": "Consectetur adipiscing elit",
     *   "done": 0
     * }]
	 */
    public function index()
    {
        //
        sleep(self::delay());
        $todos = Todo::all();
        return $todos;
    }

    /**
     * Cria uma nova tarefa
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     * @bodyParam title string required Titulo da Tarefa. Example: Lorem Ipsum
     * @bodyParam description string required Descrição da Tarefa. Example: Dolor Sit Amet
     * @bodyParam notes string required Notas relacionadas à Tarefa. Example: Consectetur Adipiscing
     * @bodyParam done boolean required Indicativo de que tarefa foi concluída. Example: 1
     */
    public function store(Request $request)
    {
        //
        sleep(self::delay());
        $todo = new Todo;
        $todo->description = $request->description;
        $todo->notes = $request->notes;
        $todo->done = $request->done;
        $todo->title = $request->title;
        $todo->save();
        return $todo;
    }

    /**
     * Mostra uma tarefa
     *
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     * @response {
     *   "id": 143,
     *   "created_at": "2020-10-07T18:55:09.000000Z",
     *   "updated_at": "2020-10-07T18:55:09.000000Z",
     *   "title": "Lorem Ipsum",
     *   "description": "Dolor sit amet",
     *   "notes": "Consectetur adipiscing elit",
     *   "done": 0
     * }
     */
    public function show($id)
    {
        //
        sleep(self::delay());
        $todo = Todo::findOrFail($id);
        return $todo;
    }

    /**
     * Atualiza uma tarefa
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     * @bodyParam title string required Titulo da Tarefa. Example: Lorem Ipsum
     * @bodyParam description string required Descrição da Tarefa. Example: Dolor Sit Amet
     * @bodyParam notes string required Notas relacionadas à Tarefa. Example: Consectetur Adipiscing
     * @bodyParam done boolean required Indicativo de que tarefa foi concluída. Example: 1
     */
    public function update(Request $request, $todo)
    {
        //
        sleep(self::delay());
        // $todo = Todo::findOrFail($id);
        $todo->description = $request->description;
        $todo->notes = $request->notes;
        $todo->done = $request->done;
        $todo->title = $request->title;
        $todo->save();
        return $todo;
    }

    /**
     * Deleta uma tarefa
     *
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        sleep(self::delay());
        $todo = Todo::findOrFail($id);
        $todo->delete();
        return $todo;
    }
}
