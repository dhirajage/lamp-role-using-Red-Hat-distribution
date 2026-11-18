<?php
$server_ip = $_SERVER['SERVER_ADDR'] ?? gethostbyname(gethostname());
$php_version = phpversion();
$mysqli_loaded = extension_loaded('mysqli') ? 'Enabled' : 'Not Loaded';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP & LAMP Diagnostics</title>
    <style>
        body { font-family: system-ui, sans-serif; background: #f4f6f8; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .card { background: white; padding: 2rem 3rem; border-radius: 10px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); max-width: 450px; width: 100%; }
        h1 { color: #1565c0; margin-top: 0; }
        table { width: 100%; border-collapse: collapse; margin-top: 1rem; }
        td { padding: 10px 0; border-bottom: 1px solid #eee; }
        td:first-child { font-weight: 600; color: #333; }
        td:last-child { text-align: right; color: #2e7d32; font-family: monospace; }
        a { display: inline-block; margin-top: 1.5rem; color: #0066cc; text-decoration: none; font-size: 0.9rem; }
    </style>
</head>
<body>
    <div class="card">
        <h1>LAMP Stack Ready</h1>
        <table>
            <tr>
                <td>PHP Version</td>
                <td><?= htmlspecialchars($php_version) ?></td>
            </tr>
            <tr>
                <td>MySQLi Extension</td>
                <td><?= $mysqli_loaded ?></td>
            </tr>
            <tr>
                <td>Server IP</td>
                <td><?= htmlspecialchars($server_ip) ?></td>
            </tr>
            <tr>
                <td>Server Time</td>
                <td><?= date('Y-m-d H:i:s T') ?></td>
            </tr>
        </table>
        <a href="index.html">&larr; Back to HTML Home</a>
    </div>
</body>
</html>
