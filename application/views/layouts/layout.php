<!DOCTYPE html>

<html>
    <head><meta charset="utf-8">
        
        <link href="<?php echo site_url(); ?>style.css" rel="stylesheet" type='text/css'>
        <title>Contact form</title></head>
    <body><div class="container">
        <header class="highlight">
            <h1><a href="<?php echo site_url(); ?>">Contacts</a></h1>
            <ul class="nav">
                <li><a href="<?php echo site_url('contact'); ?>">Contact form</a></li>
                <li><a href="<?php echo site_url('contact/view'); ?>">Contact list</a></li>
            </ul></header>
            <div class="main">
                <?php
                
                // DRY unified layout
                switch (uri_string()){ 
                    case 'contact/view':{
                        $this->load->view('list');
                        break;
                    }
                    case 'fourohfour':{  
                        $this->output->set_status_header('404'); // just in case someone cares
                        echo '404 not found';
                        break;
                    } 
                    // fallback form/starting page
                    case 'contact':
                    case '':{
                        $this->load->view('form');
                        break;
                    }
                }
                ?>
            </div>
        <footer>&copy; <?php echo date('Y'); ?> Filip Božanović</footer>
    </div>
    </body>