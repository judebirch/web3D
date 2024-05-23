using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class LightController : MonoBehaviour
{
    public Light MainLight;
    public Light ColourLight;

    private int _state = 1;

    private float _hue = 0;

    private void Update()
    {
        switch(_state)
        {
            case 2:
                _hue += Time.deltaTime * 0.1f;
                if(_hue > 1)
                {
                    _hue -= 1;
                }
                ColourLight.color = Color.HSVToRGB(_hue, 1, 1);
                break;
        }

        if(Input.GetKeyDown(KeyCode.L))
        {
            NextState();
        }
    }

    public void NextState()
    {
        _state++;
        if(_state == 3)
        {
            _state = 0;
        }

        switch(_state)
        {
            case 0:
            {
                MainLight.enabled = false;
                ColourLight.enabled = false;
                break;
            }
            case 1:
                {
                    MainLight.enabled = true;
                    ColourLight.enabled = false;
                    break;
                }
            case 2:
                {
                    MainLight.enabled = false;
                    ColourLight.enabled = true;
                    break;
                }
        }
    }
}
