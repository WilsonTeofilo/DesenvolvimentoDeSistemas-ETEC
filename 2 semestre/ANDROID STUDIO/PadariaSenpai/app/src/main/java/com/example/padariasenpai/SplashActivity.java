package com.example.padariasenpai;

import android.content.Intent;
import android.os.Bundle;
import android.os.Handler;

import androidx.appcompat.app.AppCompatActivity;

public class SplashActivity extends AppCompatActivity {

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_splash_layout);

        // Espera 3 segundos e vai pra tela de login
        new Handler().postDelayed(() -> {
            Intent intent = new Intent(SplashActivity.this, login_layout.class);
            startActivity(intent);
            finish(); // fecha o splash pra não voltar nele
        }, 3000);
    }
}
