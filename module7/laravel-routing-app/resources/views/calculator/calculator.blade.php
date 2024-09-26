<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>My first views load in laravel</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- external css called here -->
     <link rel="stylesheet" href="{{asset('assets/css/calc.css')}}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="{{asset('assets/js/calc.js')}}"></script>    
</head>
<body>

    <!-- calculator views -->
     <div class="container mt-2 calculator-app m-0 p-0">
        <div class="calculator-result">
            <table class="table table-resposnive">
            <tr>
            <td colspan="4"><input type="text" class="form-control" placeholder="0" id="result" /></td>
            </tr>
            <tr>
                <td><button type="button" class="btn btn-lg btn-white shadow w-100 bg-white text-dark p-4" value="%">%</button></td>
                <td><button type="button" class="btn btn-lg btn-white shadow w-100 bg-white text-dark p-4">CE</button></td>
                <td><button type="button" class="btn btn-lg btn-white shadow w-100 bg-white text-dark p-4" onclick="clr()">C</button></td>
                <td><button type="button" class="btn btn-lg btn-white shadow w-100 bg-white text-dark p-4" onclick="SliceValue()"><span class="bi bi-backspace text-dark"></span></button></td>
            </tr>

            <tr>
                <td><button type="button" class="btn btn-lg btn-white shadow w-100 bg-white text-dark p-4" value="1/x" onclick="return getValue(this.value)">1/x</button></td>
                <td><button type="button" class="btn btn-lg btn-white shadow w-100 bg-white text-dark p-4" onclick="sq()">x<sup>2</sup></button></td>
                <td><button type="button" class="btn btn-lg btn-white shadow w-100 bg-white text-dark p-4" onclick="sqrtfun()">2√x</button></td>
                <td><button type="button" class="btn btn-lg btn-white shadow w-100 bg-white text-dark p-4" value="/" onclick="return getValue(this.value)">/</button></td>
            </tr>


            <tr>
                <td><button type="button" class="btn btn-lg btn-white shadow w-100 bg-white text-dark p-4" value="7" onclick="return getValue(this.value)">7</button></td>
                <td><button type="button" class="btn btn-lg btn-white shadow w-100 bg-white text-dark p-4" value="8" onclick="return getValue(this.value)">8</button></td>
                <td><button type="button" class="btn btn-lg btn-white shadow w-100 bg-white text-dark p-4" value="9" onclick="return getValue(this.value)">9</button></td>
                <td><button type="button" class="btn btn-lg btn-white shadow w-100 bg-white text-dark p-4" value="*" onclick="return getValue(this.value)">X</button></td>
            </tr>

            <tr>
                <td><button type="button" class="btn btn-lg btn-white shadow w-100 bg-white text-dark p-4" value="4" onclick="return getValue(this.value)">4</button></td>
                <td><button type="button" class="btn btn-lg btn-white shadow w-100 bg-white text-dark p-4" value="5" onclick="return getValue(this.value)">5</button></td>
                <td><button type="button" class="btn btn-lg btn-white shadow w-100 bg-white text-dark p-4" value="6" onclick="return getValue(this.value)">6</button></td>
                <td><button type="button" class="btn btn-lg btn-white shadow w-100 bg-white text-dark p-4" value="-" onclick="return getValue(this.value)">-</button></td>
            </tr>

            <tr>
                <td><button type="button" class="btn btn-lg btn-white shadow w-100 bg-white text-dark p-4" value="1" onclick="return getValue(this.value)">1</button></td>
                <td><button type="button" class="btn btn-lg btn-white shadow w-100 bg-white text-dark p-4" value="2" onclick="return getValue(this.value)">2</button></td>
                <td><button type="button" class="btn btn-lg btn-white shadow w-100 bg-white text-dark p-4" value="3" onclick="return getValue(this.value)">3</button></td>
                <td><button type="button" class="btn btn-lg btn-white shadow w-100 bg-white text-dark p-4" value="+" onclick="return getValue(this.value)">+</button></td>
            </tr>

            <tr>
                <td><button type="button" class="btn btn-lg btn-white shadow w-100 bg-white text-dark p-4" value="+/-" onclick="return getValue(this.value)">+/-</button></td>
                <td><button type="button" class="btn btn-lg btn-white shadow w-100 bg-white text-dark p-4" value="0" onclick="return getValue(this.value)">0</button></td>
                <td><button type="button" class="btn btn-lg btn-white shadow w-100 bg-white text-dark p-4" value="." onclick="return getValue(this.value)">.</button></td>
                <td><button type="button" class="btn btn-lg  shadow w-100 bg-primary text-white p-4" onclick="getResult()">=</button></td>
            </tr>

            </table>
        </div>
     </div>
    
</body>
</html>