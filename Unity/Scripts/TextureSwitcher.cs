using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class TextureSwitcher : MonoBehaviour
{
    public List<Texture2D> _textures;

    private int _currentTexture = 0;

    public Material _mainMat;

    public Material _outlineMat;

    public void NextTexture()
    {
        _currentTexture++;
        if(_currentTexture >= _textures.Count)
        {
            _currentTexture = 0;
        }

        GetComponent<MeshRenderer>().material.mainTexture = _textures[_currentTexture];
    }

    public void SetMaterial(int id)
    {
        if(id == 0)
        {
            GetComponent<MeshRenderer>().material = _mainMat;
            GetComponent<MeshRenderer>().material.mainTexture = _textures[_currentTexture];
        }
        else
        {
            GetComponent<MeshRenderer>().material = _outlineMat;
        }
    }


    public void SetTexture(int id)
    {
        _currentTexture = id;
        GetComponent<MeshRenderer>().material.mainTexture = _textures[_currentTexture];
    }
}
