<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('questions', function (Blueprint $table) {
            $table->id();
            $table->string('question1')->required();
            $table->string('question2')->required();
            $table->string('question3')->required();
            $table->string('question4')->required();
            $table->string('question5')->required();
            $table->string('question6')->required();
            $table->string('question7')->required();
            $table->string('question8')->required();
            $table->string('question9')->required();
            $table->string('question10')->required();
            $table->string('question11')->required();
            $table->string('question12')->required();
            $table->string('question13')->required();
            $table->string('question14')->required();
            $table->string('question15')->required();
            $table->string('question16')->nullable();
            $table->string('question17')->nullable();
            $table->string('question18')->nullable();
            $table->string('question19')->required();
            $table->string('question20')->required();
            $table->string('question21')->required();
            $table->string('question22')->nullable();
            $table->string('question23')->required();
            $table->string('question24')->required();
            $table->string('question25')->required();
            $table->string('question26')->required();
            $table->string('question27')->required();
            $table->string('question28')->required();
            $table->string('question29')->required();
            $table->string('question30')->required();
            $table->string('question31')->required();
            $table->string('question32')->nullable();
            $table->string('question33')->nullable();
            $table->string('question34')->required();  //aret
            $table->string('question35')->required();
            $table->string('question36')->required();
            $table->string('question37')->required();
            $table->string('question38')->required();
            $table->string('question39')->required();
            $table->string('question40')->required();
            $table->string('question41')->nullable();
            $table->string('question42')->nullable();
            // $table->string('question43');
            $table->string('question44')->nullable();
            $table->string('question45')->required();
            $table->string('question46')->required();
            $table->string('question47')->required();
            $table->string('question48')->required();
            $table->string('question49')->required();
            $table->string('question50')->required();
            $table->string('question51')->required();
            $table->string('question52')->required();
            $table->string('question53')->nullable();
            $table->string('question54')->nullable();
            $table->string('question55')->required();
            $table->string('question56')->required();
            $table->string('question57')->required();
            $table->string('question58')->required();
            $table->string('question59')->required();
            $table->string('question60')->required();
            $table->string('question61')->required();
            $table->string('question62')->required();
            $table->string('question63')->required();
            $table->string('question64')->required();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
