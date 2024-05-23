using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class MessageListener : MonoBehaviour
{
    void Start()
    {
        Application.ExternalCall("InitializeMessageListener");
    }

    public void OnMessageReceived(string message)
    {
        if (message == "Animate")
        {
            GameObject model = GameObject.Find("Model");
            if (model != null)
            {
                model.SendMessage("Animate");
            }
        }
    }
}
