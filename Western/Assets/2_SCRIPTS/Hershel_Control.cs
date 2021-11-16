using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class Hershel_Control : MonoBehaviour
{
    // ================================================== //
    // Script to control the movement of the player

    public GameObject hershel;
    public bool isMoving;
    public float horizontalMovement;
    public float verticalMovement;

    void Update()
    {
        if(Input.GetButton("Horizontal") || Input.GetButton("Vertical"))
        {
            isMoving = true;
            
            if(Input.GetButton("SKey"))
            {
                hershel.GetComponent<Animator>().Play("WalkBackward");
            }
            else
            {
                hershel.GetComponent<Animator>().Play("WalkForward");
            }
            horizontalMovement = Input.GetAxis("Horizontal") * Time.deltaTime * 150;
            verticalMovement = Input.GetAxis("Vertical") * Time.deltaTime * 3.9f;
            hershel.transform.Rotate(0, horizontalMovement, 0);
            hershel.transform.Translate(0, 0, verticalMovement);
        }
        else
        {
            isMoving = false;
            hershel.GetComponent<Animator>().Play("DefaultStanding");
        }
    }
    // ================================================== //
}
