import React,{createContext,useContext, useState} from "react";
import Archery from "../Archery";
import Master from "../Master";



const Profile =()=>{
    return(
            <div>
                <Archery/>
                <Master />
            </div>
    )
}

export default Profile;