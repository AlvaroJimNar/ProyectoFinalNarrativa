using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class Camera_Switch : MonoBehaviour
{
    // ================================================== //
    // Script to switch cameras

    public GameObject cameraON;
    public GameObject cameraOFF;

    void OnTriggerEnter(Collider other)
    {
        if(other.tag == "Player")
        {
            cameraOFF.SetActive(true);
            cameraON.SetActive(false);
        }
    }

    // ================================================== //
}
