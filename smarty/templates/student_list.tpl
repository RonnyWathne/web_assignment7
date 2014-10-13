<div class="alert alert-warning" role="alert">
    
</div>

<table class="table table-condensed table-hover">
    <thead>
        <tr>
            <th>Name</th>
            <th>Student number</th>
            <th>Email</th>
            <th>Unix username</th>
            <th>Codecademy username</th>
            <th>Github username</th>            
        </tr>
    </thead>
    <tbody>
	{foreach from=$students item=s}
        <tr>
            <td>{$s.name}</td>
            <td>{$s.student_no}</td>
            <td>{$s.email}</td>
            <td>{$s.user_unix}</td>
            <td>{$s.user_codecademy}</td>
            <td>{$s.user_github}</td>            
        </tr>
    {/foreach}   
    </tbody>
</table>

<a href="index.php?action=logout">logout</a>
