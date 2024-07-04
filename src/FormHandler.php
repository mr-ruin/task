<?php

declare(strict_types=1);

namespace App;

use Exception;

require 'vendor/autoload.php';

/**
 * Class FormHandler
 */
class FormHandler
{
    /**
     * Handle the form submission.
     *
     * @return string JSON response
     */
    public function handle(): string
    {
        try {
            $name = $this->sanitizeInput($_POST['name'] ?? '');
            $email = $this->sanitizeInput($_POST['email'] ?? '');
            $message = $this->sanitizeInput($_POST['message'] ?? '');

            if (empty($name) || empty($email) || empty($message)) {
                throw new Exception('All fields are required.');
            }

            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                throw new Exception('Invalid email format.');
            }

            return json_encode(['success' => true]);
        } catch (Exception $e) {
            return json_encode(['success' => false, 'message' => $e->getMessage()]);
        }
    }

    /**
     * Sanitize input data.
     *
     * @param string $data
     * @return string
     */
    private function sanitizeInput(string $data): string
    {
        return htmlspecialchars(stripslashes(trim($data)));
    }
}
