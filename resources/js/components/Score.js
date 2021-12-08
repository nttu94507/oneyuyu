import React, {Component} from 'react';



const Score = () => {
    const num = [1,2,3,4,5,6]
    return(
        num.map((e)=>
            <input  key={e} name={"shot"+e} />
            
        
        )
    )
      
}

export default Score;
