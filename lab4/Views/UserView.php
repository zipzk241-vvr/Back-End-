<?php
namespace Views;

/**
 * Class UserView
 * Відповідає за вивід інформації користувачу.
 */
class UserView
{
    public function render($content)
    {
        echo "<h2>View</h2>";
        echo "<div style='border: 1px solid gray; padding: 10px;'>$content</div>";
    }
}
