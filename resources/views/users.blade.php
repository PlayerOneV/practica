@include('welcome')
<div class="container text-center">
    <x-tables.course-user :users="$users" />
</div>