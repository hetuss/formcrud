 <body bgcolor="black" text="white">
       <table align="center" height="500" width="500" border="1" >
        <form method="post" enctype="multipart/form-data" action="{{route('insrts')}}">
            @csrf
            <tr>
                <td height="20" width="20" colspan="2" align="center">regestration form</td>
            </tr>
            <tr>
                <td height="20" width="20">usrename</td>
                <td>
                    <input type="text" name="name"></td></tr>
                    <tr>
                        <td height="20" width="20" >password</td>
                    <td><input type="text" name="password"></td>
                    </tr>
                    <tr>
                        <td height="20" width="20">address</td> 
                        <td><textarea name="address"></textarea></td>
                    </tr>
                    <tr>
                        <td height="20" width="20">{{ __('Gender') }}</td>
                        <td><input type="radio" name="rbt1" value="male">male
                        <input type="radio" name="rbt1" value="female">female </td>
                    </tr>
                    <tr>
                        <td height="20" width="20">hobby</td>
                        <td>
                            <input type="checkbox" name="hby[]" id="play" value="play">play
                            <input type="checkbox" name="hby[]" id="read" value="read">read
                             <input type="checkbox" name="hby[]" id="music" value="music" >music
                             <input type="checkbox" name="hby[]" id="read" value="travel">travel
                            <!-- <input type="checkbox" name="h_5">movie -->
                        </td>
                    </tr>
                    <tr>
                                <td height="20" width="20">city</td>
                                <td>
                                <select name="citynm">
                                    <option disabled selected="">---select---</option>
                                    <option>rajkot</option>
                                    <option>amd</option>
                                    <option>bhuj</option>
                                    <option>diu</option>
                                </select>
                                </td>
            </tr>
            <tr>
                <td height="50">photo</td>
       <td><input type="file" name="image"></td>
            </tr>
             
             <tr>
                 <td height="50"></td>
       <td><input type="submit" name="submit" id="select" value="save"></td>
             </tr>
           
                                
        </form>
       </table>
       
       </body>
       $request->validate([

  'name' => 'required|alpha_num',

]);

09:56
array https://laravel.com/docs/4.2/helpers#arrays

Laravel - The PHP Framework For Web Artisans
https://laravel.com

Richa, 09:57
$request->validate([

    'start_date' => 'required',

    'end_date' => 'required|date|before:start_date'

]);

09:58
between  public function index()
    {
        $users = User::select("*")
                        ->whereBetween('points', [1, 100])
                        ->get();
  
        dd($users);
    }

Richa, 09:58
$request->validate([
    'amount' => 'required|digits_between:1,2'
]);

$request->validate([

'date' => 'required|date|date_format:Y-m-d',

]);

10:00
date date('d-m-Y', strtotime($user->from_date));
digits beetween //'item' => 'required|integer|between:1,10',
exist data //$user = User::where('email', '=', Input::get('email'))->first();
if ($user === null) {
   // user doesn't exist
}

Richa, 10:02
email->  $request->validate([
        'email' => 'regex:/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix'
    ]);

10:03
in//$users = DB::table('users')->whereIn('id', array(1, 2, 3))->get();

Richa, 10:04
image//$request->validate([
        'image' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',
    ]);

10:05
integer//integer
The field under validation must have an integer value.


Richa, 10:05
max//$request->validate([

  'title' => 'max:12',

]);


10:06
min//public function getLowestAttribute ()
{
    $prices = $this->prices->filter(function ($item) {
        return !is_null($item->price);
    });

    return $prices->min('price');
}

Richa, 10:07
not in//          $this->validate($request, [
    'email' => 'required|email|not_in:'.$user->email,
]);

10:08
numerice//<?php
$tests = [
    " 42",
    "42 ",
    " 9001", // non-breaking space
    "9001 ", // non-breaking space
];

foreach ($tests as $element) {
    if (is_numeric($element)) {
        echo var_export($element, true) . " is numeric", PHP_EOL;
    } else {
        echo var_export($element, true) . " is NOT numeric", PHP_EOL;
    }
}
?>

Richa, 10:09
regular expression//        $request->validate([

	'project_name' => 'required|regex:/(^([a-zA-z]+)(\d+)?$)/u',

]);

10:09
required //$validator = Validator::make(
  
    [
        'name' => 'required',
        'password' => 'required|min:8',
        'email' => 'required|email|unique:users'
    ]
);
43//http://vaidehijoshi.github.io/blog/2015/05/19/the-secret-life-of-your-database-part-1-migrations/#:~:text=The%20up%20method%20is%20called,instructions%20for%20reverting%20a%20mig
       
       
       
