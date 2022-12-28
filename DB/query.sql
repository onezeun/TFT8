
-- 메인페이지

-- 계열시너지 데이터
SELECT * FROM origin_synergies WHERE o_icon = 'Gadgeteen';

-- 계열시너지에 맞는 챔피언 아이콘, 이미지, 가격, 이름 데이터
SELECT o.o_title, cham.c_idx, cham.c_name, cham.c_cost, cham.c_icon, cham.c_img FROM origin_synergies o JOIN champion_origin co ON o.o_idx = co.o_idx JOIN champions cham ON co.c_idx = cham.c_idx WHERE o.o_icon = 'Threat' ORDER BY cham.c_cost;