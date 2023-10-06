package com.example.vetathome;

import androidx.annotation.Nullable;
import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

import com.android.volley.AuthFailureError;
import com.android.volley.Request;
import com.android.volley.RequestQueue;
import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.StringRequest;
import com.android.volley.toolbox.Volley;

import java.util.HashMap;
import java.util.Map;

public class UserRegistration extends AppCompatActivity {

    EditText nameET;
    EditText phoneET;
    EditText addressET;
    EditText ageET;
    EditText usernameET;
    EditText emailET;
    EditText passwordET;
    Button registerBT;

    private GlobalPreference globalPreference;
    private String ip;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_user_registration);

        globalPreference = new GlobalPreference(this);
        ip = globalPreference.getIp();

        nameET = findViewById(R.id.nameEditText);
        phoneET = findViewById(R.id.phoneEditText);
        addressET = findViewById(R.id.addressEditText);
        ageET = findViewById(R.id.ageEditText);
        usernameET = findViewById(R.id.usernameEditText);
        emailET = findViewById(R.id.emailEditText);
        passwordET = findViewById(R.id.passwordEditText);
        registerBT = findViewById(R.id.registerButtonn);

        registerBT.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                String name = nameET.getText().toString();
                String phone = phoneET.getText().toString();
                String address = addressET.getText().toString();
                String age = ageET.getText().toString();
                String username = usernameET.getText().toString();
                String email = emailET.getText().toString();
                String password = passwordET.getText().toString();

                register(name,phone,address,age,username,email,password);
            }
        });
    }

    private void register(String name, String phone, String address, String age,String username,String email, String password) {
        StringRequest stringRequest = new StringRequest(Request.Method.POST, "http://"+ip+"/vetathome/api/uregister.php", new Response.Listener<String>() {
            @Override
            public void onResponse(String response) {
                if(response.equals("success")){
                    Intent intent = new Intent(UserRegistration.this,UserLogin.class);
                    startActivity(intent);
                }
                else{
                    Toast.makeText(UserRegistration.this,""+response,Toast.LENGTH_SHORT).show();
                }
            }
        }, new Response.ErrorListener() {
            @Override
            public void onErrorResponse(VolleyError error) {
                Toast.makeText(UserRegistration.this,""+error,Toast.LENGTH_SHORT).show();
            }
        }){
            @Nullable
            @Override
            protected Map<String,String> getParams() throws AuthFailureError {
                Map<String,String> params = new HashMap<>();
                params.put("name",name);
                params.put("phone",phone);
                params.put("address",address);
                params.put("age",age);
                params.put("username",username);
                params.put("email",email);
                params.put("password",password);
                return params;
            }
        };
        RequestQueue requestQueue = Volley.newRequestQueue(UserRegistration.this);
        requestQueue.add(stringRequest);
    }

}