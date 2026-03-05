<h1>Hello From Laravel Course</h1>

{{-- {{ \Illuminate\Support\Js::from($hobbies) }} --}}

<script>
    const hobbies = {{ Js::from($hobbies) }}
</script>


@verbatim
    
<div>
    Name: {{ name }}
    Age: {{ age }}
    Job: {{ job }}
    Hobbies: {{ hobbies }}
    @if
</div>

@endverbatim
