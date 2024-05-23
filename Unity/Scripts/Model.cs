using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class Model : MonoBehaviour
{
    public bool Direction;

    public List<GameObject> _models;

    private int _currentModel = 0;
    private int _modelIndex = 0;

    private int _state = 1;


    private int _matId = 0;

    // Update is called once per frame
    void Update()
    {

        switch(_state)
        {
            case 1:
                AnimateState();
                break;
        }


        

        if(Input.GetKeyDown(KeyCode.M))
        {
            NextModel();
        }


        if (Input.GetMouseButton(0))
        {
            var delta = Input.mousePosition - _previousMouse;

            transform.Rotate(new Vector3(delta.y, -delta.x, 0), Space.World);
        }

        _previousMouse = Input.mousePosition;


        if (Input.GetKeyDown(KeyCode.S))
        {
            _state++;

            if(_state == 2)
            {
                _state = 0;
            }
        }

        if (Input.GetKeyDown(KeyCode.Space))
        {
            NextTexture();
        }

        if(Input.GetKeyDown(KeyCode.W))
        {
            ToggleWireframe();
        }
    }

    public void ToggleWireframe()
    {
        if (_matId == 0)
        {
            _matId = 1;
        }
        else
        {
            _matId = 0;
        }

        SetModel(_currentModel);
    }


    private Vector3 _previousMouse;


    public void SetTexture(int id)
    {
        _models[_modelIndex].GetComponent<TextureSwitcher>().SetTexture(id);
    }

    public void NextTexture()
    {
        _models[_modelIndex].GetComponent<TextureSwitcher>().NextTexture();
    }

    public void SetModel(int id)
    {
        _currentModel = id;
        _models[_modelIndex].SetActive(false);

        _modelIndex = id * 2;

        if(_matId == 1)
        {
            _modelIndex++;
        }


        _models[_modelIndex].SetActive(true);

        if (_matId == 1)
        {
            _models[_modelIndex].GetComponent<MeshWireframeComputor>().UpdateMesh();
        }
    }

    private void AnimateState()
    {
        if (Direction)
        {
            transform.Rotate(Vector3.up, Time.deltaTime * 90, Space.World);

        }
        else
        {
            transform.Rotate(Vector3.up, Time.deltaTime * -90, Space.World);

        }
    }



    public void NextModel()
    {
        SetModel((_currentModel + 1) % 3);
    }

    public void SetDir()
    {
        Direction = !Direction;
    }

    public void SetState(int id)
    {
        _state = id;
    }
}
