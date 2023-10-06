package com.example.vetathome;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;

public class IPActivity extends AppCompatActivity {

    GlobalPreference globalPreference;
    private EditText ipAddressEditText;
    private Button submitButton;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_ipactivity);

        ipAddressEditText = findViewById(R.id.et_address);

        globalPreference = new GlobalPreference(this);

        ipAddressEditText.setText(globalPreference.getIp());
        submitButton = findViewById(R.id.submitButton);

        submitButton.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {
                globalPreference.saveIp(ipAddressEditText.getText().toString());
                Intent intent = new Intent(IPActivity.this,MainActivity.class);
                startActivity(intent);
            }
        });
    }
}