<!DOCTYPE html>
<html lang="en">
<head>
    <script src="/assets/News/jquery.min.js"></script>
    <script src="/dist/jquery.inputmask.bundle.min.js"></script>
    <script>
        $(document).ready(function(){
            $(":input").inputmask();
        });
    </script>
</head>
<body>
    <input data-inputmask="'alias': 'date'" name="ngaysudung" type="text" data-validate = "required" class="form-control" id="ngaysudung"/>
</body>
</html>
