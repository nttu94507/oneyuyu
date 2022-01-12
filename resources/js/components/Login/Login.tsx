import React from "react";
import GoogleLogin from "react-google-login";


const Login =()=>{
    const responseGoogle = (response:any) => {
        console.log(response);
}

    return (
    <GoogleLogin
    clientId="376783679551-07cluibvihad3qiqs17e1iol192lujgh.apps.googleusercontent.com"
    buttonText="Google 登入"
    onSuccess={responseGoogle}
    onFailure={responseGoogle}
    cookiePolicy={'single_host_origin'}
  />
    )
}



export default Login;