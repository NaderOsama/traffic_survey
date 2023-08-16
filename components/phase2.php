<div>
    <h2 class="arrow" style="cursor: pointer;"> القسم الثاني: توصيف أماكن الازدحام وتوقيتاتها</h2>
    <div class="form-control">
        <label for="cairo-road-usage[]" style="font-size: 16px; font-weight: bold;"> توقيت الازدحام داخل القاهرة الكبري بصفة عامة   :</label>
        <div class="grid-form">
            <div class="checkbox-container">
                <div class="checkbox-item">
                    <input type="checkbox" name="cairo-road-usage[]" value="6ص-9ص"> 6ص - 9ص
                </div>
                <div class="checkbox-item">
                    <input type="checkbox" name="cairo-road-usage[]" value="9ص – 12ظ"> 9ص – 12ظ
                </div>
                <div class="checkbox-item">
                    <input type="checkbox" name="cairo-road-usage[]" value="12ظ -  3م ">12ظ - 3م
                </div>
                <div class="checkbox-item">
                    <input type="checkbox" name="cairo-road-usage[]" value="3 - 5م">3 - 5م
                </div>
                <div class="checkbox-item">
                    <input type="checkbox" name="cairo-road-usage[]" value="5 - 8م"> 5 - 8م
                </div>
                <div class="checkbox-item">
                    <input type="checkbox" name="cairo-road-usage[]" value="8 - 11م"> 8 - 11م
                </div>
            </div>
            <div class="radio-container">
                <label style="font-size: 16px; font-weight: bold;">احيانا</label>
                <label style="font-size: 16px; font-weight: bold;">كثيرا</label>
                <label style="font-size: 16px; font-weight: bold;">دائما</label><br>
                <input type="radio" name="cairo_usage6amTo9am" value="احيانا">
                <input type="radio" name="cairo_usage6amTo9am" value="كثيرا">
                <input type="radio" name="cairo_usage6amTo9am" value="دائما"><br>
                <input type="radio" name="cairo_usage9amTo12am" value="احيانا">
                <input type="radio" name="cairo_usage9amTo12am" value="كثيرا">
                <input type="radio" name="cairo_usage9amTo12am" value="دائما"><br>
                <input type="radio" name="cairo_usage12amTo3pm" value="احيانا">
                <input type="radio" name="cairo_usage12amTo3pm" value="كثيرا">
                <input type="radio" name="cairo_usage12amTo3pm" value="دائما"><br>
                <input type="radio" name="cairo_usage3pmTo5pm" value="احيانا">
                <input type="radio" name="cairo_usage3pmTo5pm" value="كثيرا">
                <input type="radio" name="cairo_usage3pmTo5pm" value="دائما"><br>
                <input type="radio" name="cairo_usage5pmTo8pm" value="احيانا">
                <input type="radio" name="cairo_usage5pmTo8pm" value="كثيرا">
                <input type="radio" name="cairo_usage5pmTo8pm" value="دائما"><br>
                <input type="radio" name="cairo_usage8pmTo11pm" value="احيانا">
                <input type="radio" name="cairo_usage8pmTo11pm" value="كثيرا">
                <input type="radio" name="cairo_usage8pmTo11pm" value="دائما"><br>
            </div>
        </div>
        <label  style="font-size: 16px; font-weight: bold;">توصيف أماكن الزحام داخل القاهرة الكبري ونسبتها:</label>
        <div class="grid-form">
            <div class="checkbox-container">
                <input type="checkbox" id="traffic-median-signals" name="traffic-congestion[]"
                    value="ميادين (تقاطعات سطحية) بإشارات مرور ضوئية" class="traffic-congestion-checkbox">
                <label for="traffic-median-signals">ميادين (تقاطعات سطحية) بإشارات مرور ضوئية أو رجل مرور</label><br>
                <input type="checkbox" id="traffic-median-no-signals" name="traffic-congestion[]"
                    value="ميادين (تقاطعات سطحية) بدون إشارات مرور (عسكري مرور)" class="traffic-congestion-checkbox">
                <label for="traffic-median-no-signals">ميادين (تقاطعات سطحية) بدون إشارات مرور أو رجل مرور</label><br>
                <input type="checkbox" id="roundabouts" name="traffic-congestion[]" value="الدورانات للخلف" class="traffic-congestion-checkbox">
                <label for="roundabouts">الدورانات للخلف نتيجة غلق التقاطعات السطحية</label><br>
                <input type="checkbox" id="around_commercial_areas" name="traffic-congestion[]"
                    value="حول المنشآت التجارية والترفيهية" class="traffic-congestion-checkbox"> 
                <label for="around_commercial_areas">حول بعض المنشآت والمباني الإدارية والتجارية والتعليمية والترفيهية</label><br>
                <input type="checkbox" id="bridge_interchanges" name="traffic-congestion[]" value="مطالع الكباري" class="traffic-congestion-checkbox">
                <label for="bridge_interchanges">مداخل ومخارج الكباري والأنفاق</label><br>
                <input type="checkbox" id="areas_with_street_vendors" name="traffic-congestion[]" value="أماكن تجمع باعة جائلين" class="traffic-congestion-checkbox">
                <label for="areas_with_street_vendors">بالقرب من مواقف النقل الجماعي ومحطات القطار والمترو</label><br>
                <input type="checkbox" id="other-locations" name="traffic-congestion[]" value="أخرى" class="traffic-congestion-checkbox">
                <label for="other-locations">أخرى</label><br>
            </div>
            <div class="radio-container">
                <label style="font-size: 16px; font-weight: bold;">ضعيف</label>
                <label style="font-size: 16px; font-weight: bold;">متوسط</label>
                <label style="font-size: 16px; font-weight: bold;">قوي</label>
                <label style="font-size: 16px; font-weight: bold;">قوي جدا</label><br>
                <input type="radio" name="traffic_median_signals" value="ضعيف">
                <input type="radio" name="traffic_median_signals" value="متوسط">
                <input type="radio" name="traffic_median_signals" value="قوي">
                <input type="radio" name="traffic_median_signals" value="قوي جدا"><br>
                <input type="radio" name="traffic_median_no_signals" value="ضعيف">
                <input type="radio" name="traffic_median_no_signals" value="متوسط">
                <input type="radio" name="traffic_median-no_signals" value="قوي">
                <input type="radio" name="traffic_median-no_signals" value="قوي جدا"><br>
                <input type="radio" name="roundabouts" value="ضعيف">
                <input type="radio" name="roundabouts" value="متوسط">
                <input type="radio" name="roundabouts" value="قوي">
                <input type="radio" name="roundabouts" value="قوي جدا"><br>
                <input type="radio" name="around_commercial_areas" value="ضعيف">
                <input type="radio" name="around_commercial_areas" value="متوسط">
                <input type="radio" name="around_commercial_areas" value="قوي">
                <input type="radio" name="around_commercial_areas" value="قوي جدا"><br>
                <input type="radio" name="bridge_interchanges" value="ضعيف">
                <input type="radio" name="bridge_interchanges" value="متوسط">
                <input type="radio" name="bridge_interchanges" value="قوي">
                <input type="radio" name="bridge_interchanges" value="قوي جدا"><br>
                <input type="radio" name="areas_with_street_vendors" value="ضعيف">
                <input type="radio" name="areas_with_street_vendors" value="متوسط">
                <input type="radio" name="areas_with_street_vendors" value="قوي">
                <input type="radio" name="areas_with_street_vendors" value="قوي جدا"><br>
            </div>
        </div>
    </div>
    <div class="form-control">
        <label style="font-weight: bold;">	توصيف أدق لأكثر الأماكن ازدحاما في طريقك المعتاد: </label><br>
        <label for="example-type-1-location" style=" font-weight: bold;">عنوان مكان الازدحام</label>
        <input type="text" id="example-type-1-location" name="example-type-1-location" ><br>
        <label for="example-type-1-map" style=" font-weight: bold;">موقع مكان الازدحام على الخريطة (إن أمكن)</label>
        <!-- <input type="text" id="example-type-1-map" name="example-type-1-map" ><br> -->
        <div class="form-control" style="display: none;">
            <label for="address">العنوان</label>
            <input type="text" id="address" name="address" placeholder="ادخل عنوانك" required autocomplete="off">
        </div>
        <div style="display: none;">
            <label for="longitude">Longitude (X):</label>
            <input type="text" id="longitude"  name="longitude" readonly>
        </div>
        <div style="display: none;">
            <label for="latitude">Latitude (Y):</label>
            <input type="text" id="latitude" name="latitude">
        </div>
        <div id="map"></div>
        <div>
            <label for="example-type-1-timing" style=" font-weight: bold;">توقيت الزحام:</label>
            <input type="time" id="example-type-1-timing" name="example-type-1-timing" ><br>
        </div>
        <div>
            <label for="example-type-1-day" style=" font-weight: bold;">ايام الزحام:</label>
            <input type="text" id="example-type-1-day" name="example-type-1-day"><br>
        </div>
    </div>
</div>
