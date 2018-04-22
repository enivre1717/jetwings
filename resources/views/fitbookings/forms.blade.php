<div ng-controller="FormsController">
    
    <a href="#!/fitbookings/list" class="btn btn-info primary-btn">Back</a>
    <div class="clear"></div>
    
    <div class="alert alert-@{{class}}" ng-show="msg != ''">
        @{{msg}}
    </div>
    
    <div class="content menu">
        <div class="col-md-1">
            <div class="hot-pink btn-lg"><span>
                @{{bookingDetails.tour_code}}<br>团队详情</span></div>
        </div>

        <div class="col-md-10">
            <a class="btn btn-small hot-pink" href="#!/fitbookings/details/@{{bookingDetails.id}}">团队资料</a>
            <div class="clear"></div>
            
            <a class="btn btn-small hot-pink" href="#!/fitbookings/welcome/@{{bookingDetails.id}}">接机牌</a>
            <div class="clear"></div>

            <a class="btn btn-small hot-pink" href="http://new.jetwings.asia/files/itinerary/@{{bookingDetails.itinerary_file}}" target="_blank" alt="Itinerary">行程</a>
            <div class="clear"></div>

            <a class="btn btn-small hot-pink" href="http://new.jetwings.asia/files/namelists/@{{bookingDetails.name_list_file}}" target="_blank" alt="Itinerary">名单</a>
            <div class="clear"></div>
        </div>

        <div class="clear"></div>

        <div class="col-md-1">
            <div class="blue btn-lg"><span>表格</span></div>
        </div>

        <div class="col-md-10">
            <a class="btn btn-small blue" href="#!/safety-contracts/index/@{{bookingDetails.id}}">离团安全责任书</a>
            
            <div class="clear"></div>
            
            <a class="btn btn-small blue" href="#!/own-expenses/index/@{{bookingDetails.id}}">自费旅游项目协议书</a>
            
            <div class="clear"></div>
            
            <a class="btn btn-small blue" href="#!/in-store/index/@{{bookingDetails.id}}">增加/减少景点协议书</a>
            
            <div class="clear"></div>
            
            <a class="btn btn-small blue" href="#!/feedback/index/@{{bookingDetails.id}}">意见表</a>
            
            <div class="clear"></div>

        </div>

        <div class="clear"></div>

        <?php
            //if(FitBookings::model()->checkHave2ndArrival($id)){
        ?>
        <a class="btn btn-info btn-xlg green" href="#!/arrival/index/@{{bookingDetails.id}}">二次交接与离新确认书</a>
        
        <?php //}//if have 2nd arrival ?>

        <div class="clear"></div>

        <div class="col-md-1">
            <div class="orange btn-lg"><span>款项</span></div>
        </div>

        <div class="col-md-10">
            <a class="btn btn-small orange" href="#!/commissions/index/@{{bookingDetails.id}}">佣金单</a>
            <div class="clear"></div>
            
            <a class="btn btn-small orange" href="#!/claims/index/@{{bookingDetails.id}}">请款单</a>
            <div class="clear"></div>
        </div>
    </div>
</div>