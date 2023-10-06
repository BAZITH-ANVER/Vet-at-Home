package com.example.vetathome;

import androidx.annotation.Nullable;
import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.ImageView;
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

public class DoctorRegistration extends AppCompatActivity {

    EditText nameET;
    EditText phoneET;
    EditText specET;
    EditText placeET;
    EditText usernameET;
    EditText feesET;
    EditText emailET;
    EditText passwordET;
    Button registerBT;

    private GlobalPreference globalPreference;
    private String ip;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_doctor_registration);

        GlobalPreference globalPreference = new GlobalPreference(this);
        ip = globalPreference.getIp();

        nameET = findViewById(R.id.nameEditText);
        phoneET = findViewById(R.id.contactEditText);
        specET = findViewById(R.id.specEditText);
        placeET = findViewById(R.id.placeEditText);
        usernameET = findViewById(R.id.usernameeEditText);
        feesET = findViewById(R.id.feesEditText);
        emailET = findViewById(R.id.emailEditText);
        passwordET = findViewById(R.id.passwordEditText);
        registerBT = findViewById(R.id.registerButton);

        registerBT.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                String name = nameET.getText().toString();
                String phone = phoneET.getText().toString();
                String spec = specET.getText().toString();
                String place = placeET.getText().toString();
                String username = usernameET.getText().toString();
                String fees = feesET.getText().toString();
                String email = emailET.getText().toString();
                String password = passwordET.getText().toString();

                register(name,phone,spec,place,username,fees,email,password);
            }
        });
    }

    private void register(String name, String phone, String spec,String place,String username,String fees, String email, String password) {
        StringRequest stringRequest = new StringRequest(Request.Method.POST, "http://"+ip+"/vetathome/api/dregister.php", new Response.Listener<String>() {
            @Override
            public void onResponse(String response) {
                if (response.equals("success")){
                    Intent intent = new Intent(DoctorRegistration.this,DoctorLogin.class);
                    startActivity(intent);
                }
                else{
                    Toast.makeText(DoctorRegistration.this,""+response,Toast.LENGTH_SHORT).show();
                }
            }
        }, new Response.ErrorListener() {
            @Override
            public void onErrorResponse(VolleyError error) {
                Toast.makeText(DoctorRegistration.this,""+error,Toast.LENGTH_SHORT).show();
            }
        }){
            @Nullable

            @Override
            protected Map<String,String> getParams() throws AuthFailureError {
                Map<String,String> params = new HashMap<>();
                params.put("name",name);
                params.put("phone",phone);
                params.put("spec",spec);
                params.put("place",place);
                params.put("username",username);
                params.put("fees",fees);
                params.put("email",email);
                params.put("password",password);
                return params;

            }
        };
        RequestQueue requestQueue = Volley.newRequestQueue(DoctorRegistration.this);
        requestQueue.add(stringRequest);
    }
}
