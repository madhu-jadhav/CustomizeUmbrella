//Fly me to my destination - It's urgent!!

function destination(arr){
    let lastPlane=0
    let lastInd=0
    let fule=arr[0]
    let result=[arr[0]]
    
    for(let i=0;i<arr.length;i++){
      if(arr[i]!==0 && i!==0){
        lastPlane = arr[i]
        lastInd =i
      }
      if(fule==0 && arr[i]==0 && lastPlane==0){
        return -1  // if not able to reach at the dstination
      }
      else if(fule==0 && arr[i]>0){
        fule=arr[i]-1 // taking 1 unite fule for current position.
        if(i !== arr.length-1){
        result.push(arr[i]) // if current index !== last index
        }
      }
      else if(fule==0 && arr[i]==0){
        fule=lastPlane-1 // taking 1 unite fule for current position.
        i=lastInd+1 // loop will start from one Step ahead.
        result.push(lastPlane)
        lastPlane=0
        lastInd=0 
      }
      else if(fule>0){
        fule--
      }
    }
    result.push(arr[arr.length-1])
    return `planes I'd need to hire = ${result}`
  }
  let arr =[1,6,3,4,5,0,0,0,6]
  let arr1 = [2,1,2,3,1]
  
  console.log(destination(arr))
  console.log(destination(arr1))
  