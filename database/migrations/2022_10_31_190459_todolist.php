<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Todolist extends Migration
{
    private $table = "todo";
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->table, function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->text('body');
            $table->dateTime('complete_to')->nullable(true);
            $table->dateTime('complete_at')->nullable(true);
            $table->tinyInteger('completed')->default(0);
            $table->timestamps();
        });
        
            \DB::table($this->table)->insert([
                [
                    'title' => 'Выполненная задача',
                    'body' => 'Начать делать сайт "TO-DO"',
                    'complete_to' => '2022-10-31 10:00:00',
                    'complete_at' => '2022-10-31 10:00:00',
                    'completed' => 1,
                    'created_at' => '2022-10-31 10:00:00',
                    'updated_at' => '2022-10-31 10:00:00'
                ],
                [
                    'title' => 'Тестовая задача', 
                    'body' => 'Сделать сайт "TO-DO"', 
                    'complete_to' => '2022-11-06 10:00:00', 
                    'complete_at' => null, 
                    'completed' => 0,
                    'created_at' => new DateTime('now'),
                    'updated_at' => new DateTime('now')
                ],
            ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists($this->table);
    }
}
