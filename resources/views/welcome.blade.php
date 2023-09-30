<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=f, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@if (count(session()->getOldInput()) && isset(session()->getOldInput()['ef']))

   {{dd(session()->getOldInput())}}
@else
    <?php
        print_r(session()->getOldInput());

    ?>
    <form method="post" action="{{route('storedata')}}">
        @csrf
        <input type="text"   name="ef" placeholder="ef" required>
       <input type="button" id="add" value="add">
        <p class="data"></p>
       <input type="submit" id="submit">
    </form>
@endif
</body>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"> </script>  
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>  
<script>  
    $(document).ready (function () {  
        var count = 0;
        $(document).on('click','#add',function() {
             $('.data').append("<input type='text' name='email["+count+"]' class='email_input' >");
             count++;
        });

        $("#basic-form").validate({
            rules : {
                "email[]" : 'required'
            }
        });

    });
</script>   -->
</html>