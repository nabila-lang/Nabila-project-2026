public function up(): void
{
    Schema::create('documentation_files', function (Blueprint $table) {

        $table->id();

        $table->string('title');

        $table->string('file_path');

        $table->string('file_type');

        $table->timestamps();

    });
}