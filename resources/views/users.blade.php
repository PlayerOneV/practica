@include('welcome')
<div class="container text-center">
    <!-- le pasamos al componente la información que recibimos del controlador con el nombre users-->
    <x-tables.course-user :users="$users" />
</div>