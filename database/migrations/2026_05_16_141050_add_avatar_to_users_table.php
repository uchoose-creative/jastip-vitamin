public function up(): void
{
    Schema::table('users', function (Blueprint $table) {

        $table->string('avatar')
              ->nullable();

    });
}