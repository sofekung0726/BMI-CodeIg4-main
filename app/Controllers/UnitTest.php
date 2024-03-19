<?php

use App\Models\BmiModel;
use PHPUnit\Framework\TestCase;

class BmiModelTest extends TestCase
{
    private $bmiModel;

    protected function setUp(): void
    {
        $this->bmiModel = new BmiModel();
    }

    public function testCalculateBmi()
    {
        $weight = 70; // 70 kg
        $height = 170; // 170 cm
        $expectedBmi = 24.22; // ค่า BMI ที่คาดหวัง

        $result = $this->bmiModel->calculateBmi($weight, $height);

        // ตรวจสอบว่าค่า BMI ที่คำนวณได้ตรงกับค่าที่คาดหวังหรือไม่
        $this->assertEquals($expectedBmi, $result);
    }

    public function testInterpretBmi()
    {
        $bmi = 24.22;
        $expectedInterpretation = 'ปกติ (สุขภาพดี)';

        $result = $this->bmiModel->interpretBmi($bmi);

        // ตรวจสอบว่าการแปลความหมายของค่า BMI ตรงกับค่าที่คาดหวังหรือไม่
        $this->assertEquals($expectedInterpretation, $result);
    }
}
?>