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