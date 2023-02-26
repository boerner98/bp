<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('failed_jobs', function (Blueprint $table) {
            $table->id();
            $table->string('uuid')->unique();
            $table->text('connection');
            $table->text('queue');
            $table->longText('payload');
            $table->longText('exception');
            $table->timestamp('failed_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('failed_jobs');
    }

    Schema::create('failed_jobs', function (Blueprint $table) {
      $table->id();
      $table->datetime('datum_und_zeit');
      $table->timestamps();
   });



    protected $fillable = [
        'datum_und_zeit',
    ];

    <div class="form-group">
    <label for="datum_und_zeit">Datum und Zeit</label>
    <input type="text" name="datum_und_zeit" id="datum_und_zeit" 
    class="form-control" value="{{ old('datum_und_zeit') ?? 
        $deinModel->datum_und_zeit->format('d.m.Y H:i') }}">
</div>
};
