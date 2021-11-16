using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class PlayerMovement : MonoBehaviour
{
       
    private void Update() {
         Rigidbody rb = GetComponent<Rigidbody>();
         if (Input.GetKey(KeyCode.A)){
           rb.transform.Rotate(Vector3.up);
         }
         else if (Input.GetKey(KeyCode.D)){
            rb.transform.Rotate(Vector3.down);
         }else if (Input.GetKey(KeyCode.W)){

             rb.velocity = Vector3.forward;
         }
         else if (Input.GetKey(KeyCode.S)){
             rb.AddForce(Vector3.back);
         }
 
     }
}
