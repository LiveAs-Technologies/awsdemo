# Generated by Django 2.2.1 on 2019-10-12 03:01

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('appceo', '0002_auto_20191012_0826'),
    ]

    operations = [
        migrations.AddField(
            model_name='appceo_data',
            name='timestamp',
            field=models.DateTimeField(auto_now=True),
        ),
    ]
