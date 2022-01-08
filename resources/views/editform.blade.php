 <body bgcolor="black" text="white">
       <table align="center" height="500" width="500" border="1" >
        <form method="POST" enctype="multipart/form-data" action="{{route('update.product')}}">
            @csrf
            <tr>
                <td height="20" width="20" colspan="2" align="center">regestration form</td>
            </tr>
            <tr>
               <input type="hidden" name="id" value="{{$products->id}}">
                <td height="20" width="20">usrename</td>
                <td>
                    <input type="text" name="name" value="{{$products->username}}"></td></tr>
                    <tr>
                        <td height="20" width="20" >password</td>
                    <td><input type="text" name="password" value="{{$products->password}}"></td>
                    </tr>
                    <tr>
                        <td height="20" width="20">address</td> 
                        <td><textarea name="address">{{$products->address}}</textarea></td>
                    </tr>
                    <tr>
                        <td height="20" width="20">{{ __('Gender') }}</td>
                        <td><input type="radio" name="rbt1" value="male" @if(old('gender',$products->gender)=="male") checked @endif>male
                        <input type="radio" name="rbt1" value="female" @if(old('gender',$products->gender)=="female") checked @endif>female </td>
                    </tr>
                    <tr>
                        <td height="20" width="20">hobby</td>
                        <td>
                            <input  type="checkbox" name="hby[]" value="play" @if('play') checked @endif>play
                            <input type="checkbox" name="hby[]" value="read" @if('read') checked @endif>read
                            <input type="checkbox" name="hby[]" value="music" @if('music') checked @endif>music
                            <input type="checkbox" name="hby[]" value="travel"@if('travel') checked @endif>travel
                            <!-- <input type="checkbox" name="h_5">movie -->
                        </td>
                    </tr>
                    <tr>
                                <td height="20" width="20">city</td>
                                <td>
                                <select name="citynm">
                                    <option disabled selected="">---select---</option>
                                    <option value="rajkot" {{$products->citynm}} {{($products->city == 'rajkot'?'selected':'')}}>rajkot</option>
                                    <option value="amd" {{$products->citynm}} {{($products->city== 'amd'?'selected':'')}}>amd</option>
                                    <option value="bhuj" {{$products->citynm}} {{($products->city== 'bhuj'?'selected':'')}}>bhuj</option>
                                    <option value="diu"  {{$products->citynm}} {{($products->city== 'diu'?'selected':'')}}>diu</option>
                                </select>
                                </td>
            </tr>
            <tr>
                <td height="50">photo</td>
       <td><input type="file" name="image" value=""><img src="{{asset('uploads/'. $products->image)}}" style="width:100px; height:100px"></td>
            </tr>
             
             <tr>
                 <td height="50"></td>
       <td><input type="submit" name="submit" value="save"></td>
             </tr>
           
                                
        </form>
       </table>
       
       </body>
       