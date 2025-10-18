<?php

use App\Models\Property;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('inquiries', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Property::class)->nullable()->constrained()->nullOnDelete();

            // Contact Info
            $table->string('name');
            $table->string('email');
            $table->string('phone', 50)->nullable();

            // Inquiry Details
            $table->enum('inquiry_type', ['viewing', 'purchase', 'general', 'investment'])->default('general');
            $table->text('message')->nullable();
            $table->enum('preferred_contact', ['email', 'phone', 'whatsapp'])->default('email');

            // Status Tracking
            $table->enum('status', ['new', 'contacted', 'qualified', 'converted', 'closed'])->default('new');
            $table->foreignIdFor(User::class, 'assigned_to')->nullable()->constrained('users')->nullOnDelete();

            // Meta
            $table->string('source', 100)->nullable();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();

            $table->timestamps();

            $table->index('property_id');
            $table->index('status');
            $table->index('created_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('inquiries');
    }
};
