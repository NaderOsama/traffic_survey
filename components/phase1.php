<div>
    <h2 class="arrow" style="cursor: pointer;">القسم الأول: خصائص مستخدم الطريق</h2>
    <div class="form-control">
        <label for="gender" style="font-weight: bold;">النوع:</label>
        <select id="gender" name="gender">
            <option value="" selected disabled>اختر النوع</option>
            <option value="ذكر">ذكر</option>
            <option value="أنثى">أنثى</option>
        </select>

        <label for="age" style="font-weight: bold;">السن:</label>
        <select id="age" name="age">
            <option value="" selected>اختر السن</option>
            <option value="أقل من 18 سنة">أقل من 18 سنة</option>
            <option value="18-24">18-24</option>
            <option value="24-30">24-30</option>
            <option value="30-40">30-40</option>
            <option value="40-60">40-60</option>
            <option value="أكبر من 60">أكبر من 60</option>
        </select>

        <label for="education" style="font-weight: bold;">المؤهل الدراسي:</label>
        <select id="education" name="education">
            <option value="" selected disabled>اختر المؤهل الدراسي</option>
            <option value="ماجستير/دكتوراه">ماجستير/دكتوراه</option>
            <option value="جامعي">جامعي</option>
            <option value="معهد">معهد</option>
            <option value="دبلوم">دبلوم</option>
            <option value="أقل من دبلوم">أقل من دبلوم</option>
        </select>

        <label for="experience_street" style="font-weight: bold;">الخبرة في مجال الطرق والنقل والمرور</label>
        <select id="experience_street" name="experience_street">
            <option value="" selected disabled>اختر الخبرة</option>
            <option value="ضعيفة">ضعيفة</option>
            <option value="متوسطة">متوسطة</option>
            <option value="جيدة">جيدة</option>
            <option value="ممتازة">ممتازة</option>
        </select>

        <label for="driving-license" style="font-weight: bold;">هل لديك رخصة قيادة؟</label>
        <select id="driving-license" name="driving-license">
            <option value="" selected disabled>اختر إجابتك</option>
            <option value="نعم">نعم</option>
            <option value="لا">لا</option>
        </select>

        <div class="grid-form">
            <div class="checkbox-container">
                <label for="transportation[]" style="font-size: 16px; font-weight: bold;">وسائل الموصلات المستخدمة داخل القاهرة الكبرى ومعدلاتها:</label>
                <div class="checkbox-item">
                    <input type="checkbox" name="transportation[]" value="سيارة خاصة"> سيارة خاصة
                </div>
                <div class="checkbox-item">
                    <input type="checkbox" name="transportation[]" value="أتوبيس"> أتوبيس
                </div>
                <div class="checkbox-item">
                    <input type="checkbox" name="transportation[]" value="ميكروباص"> ميكروباص
                </div>
                <div class="checkbox-item">
                    <input type="checkbox" name="transportation[]" value="تاكسي"> تاكسي
                </div>
                <div class="checkbox-item">
                    <input type="checkbox" name="transportation[]" value="موتوسيكل"> موتوسيكل
                </div>
                <div class="checkbox-item">
                    <input type="checkbox" name="transportation[]" value="قطار"> قطار
                </div>
            </div>

            <div class="radio-container">
                <label style="font-size: 16px; font-weight: bold;">احيانا</label>
                <label style="font-size: 16px; font-weight: bold;">كثيرا</label>
                <label style="font-size: 16px; font-weight: bold;">دائما</label><br>
                <input type="radio" name="private-car-radio" value="احيانا">
                <input type="radio" name="private-car-radio" value="كثيرا">
                <input type="radio" name="private-car-radio" value="دائما"><br>
                <input type="radio" name="bus_radio" value="احيانا">
                <input type="radio" name="bus_radio" value="كثيرا">
                <input type="radio" name="bus_radio" value="دائما"><br>
                <input type="radio" name="microbus" value="احيانا">
                <input type="radio" name="microbus" value="كثيرا">
                <input type="radio" name="microbus" value="دائما"><br>
                <input type="radio" name="taxi" value="احيانا">
                <input type="radio" name="taxi" value="كثيرا">
                <input type="radio" name="taxi" value="دائما"><br>
                <input type="radio" name="motorcycle" value="احيانا">
                <input type="radio" name="motorcycle" value="كثيرا">
                <input type="radio" name="motorcycle" value="دائما"><br>
                <input type="radio" name="train" value="احيانا">
                <input type="radio" name="train" value="كثيرا">
                <input type="radio" name="train" value="دائما"><br>
            </div>
        </div>

        <label for="road-usage[]" style="font-size: 16px; font-weight: bold;">توقيتات استخدام الطرق ونسبتها:</label>
        <div class="grid-form">
            <div class="checkbox-container">
                <div class="checkbox-item">
                    <input type="checkbox" name="road-usage[]" value="6ص-9ص"> 6ص - 9ص
                </div>
                <div class="checkbox-item">
                    <input type="checkbox" name="road-usage[]" value="9ص – 12ظ"> 9ص – 12ظ
                </div>
                <div class="checkbox-item">
                    <input type="checkbox" name="road-usage[]" value="12ظ -  3م "> 12ظ -  3م  
                </div>
                <div class="checkbox-item">
                    <input type="checkbox" name="road-usage[]" value="3 - 5م"> 3 - 5م
                </div>
                <div class="checkbox-item">
                    <input type="checkbox" name="road-usage[]" value="5 - 8م"> 5 - 8م
                </div>
                <div class="checkbox-item">
                    <input type="checkbox" name="road-usage[]" value="8 - 11م"> 8 - 11م
                </div>
            </div>
            <div class="radio-container">
                <label style="font-size: 16px; font-weight: bold;">احيانا</label>
                <label style="font-size: 16px; font-weight: bold;">كثيرا</label>
                <label style="font-size: 16px; font-weight: bold;">دائما</label><br>
                <input type="radio" name="road_usage6amTo9am" value="احيانا">
                <input type="radio" name="road_usage6amTo9am" value="كثيرا">
                <input type="radio" name="road_usage6amTo9am" value="دائما"><br>
                <input type="radio" name="road_usage9amTo12am" value="احيانا">
                <input type="radio" name="road_usage9amTo12am" value="كثيرا">
                <input type="radio" name="road_usage9amTo12am" value="دائما"><br>
                <input type="radio" name="road_usage12amTo3pm" value="احيانا">
                <input type="radio" name="road_usage12amTo3pm" value="كثيرا">
                <input type="radio" name="road_usage12amTo3pm" value="دائما"><br>
                <input type="radio" name="road_usage3pmTo5pm" value="احيانا">
                <input type="radio" name="road_usage3pmTo5pm" value="كثيرا">
                <input type="radio" name="road_usage3pmTo5pm" value="دائما"><br>
                <input type="radio" name="road_usage5pmTo8pm" value="احيانا">
                <input type="radio" name="road_usage5pmTo8pm" value="كثيرا">
                <input type="radio" name="road_usage5pmTo8pm" value="دائما"><br>
                <input type="radio" name="road_usage8pmTo11pm" value="احيانا">
                <input type="radio" name="road_usage8pmTo11pm" value="كثيرا">
                <input type="radio" name="road_usage8pmTo11pm" value="دائما"><br>
            </div>
        </div>
    </div>
</div>
