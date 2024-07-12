php <?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->text('title_logo');
            $table->text('navbar_logo');
            $table->text('hero');
            $table->string('slogan');
            $table->longText('tentang_kami');
            $table->text('foto_tentang_kami');
            $table->string('alamat');
            $table->string('instagram');
            $table->string('email')->unique();
            $table->bigInteger('no_telepon');
            $table->string('link_gmaps', 500);
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
        Schema::dropIfExists('settings');
    }
}
