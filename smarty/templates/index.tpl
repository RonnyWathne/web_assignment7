<html>
    <head>
        <title>[{$course_code}] {$course_name} | Signup</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    </head>
    <body>
        <div id="header">
            <h1>[{$course_code}] {$course_name} <small>{$page_title}</small></h1>
        </div>        

        <div class="col-md-8">
            {* display info text *}
            {if $page_info}
                <div class="alert alert-info" role="alert">
                    <p>{$page_info}</p>
                </div>
            {/if}

            {* display errors *}
            {if $page_errors}
                <div class="alert alert-danger" role="alert">
                    {foreach $page_errors as $error}
                        <p>{$error}</p>
                    {/foreach}
                </div>
            {/if}

            {* display page content *}
            {if $logged_in}
                {include file="$page.tpl"}
            {else}
                {if $page == "signup"}
                    {include file="signup.tpl"}
                {else}
                    {include file="login.tpl"}
                {/if}
            {/if}
        </div>
    </body>
</html>