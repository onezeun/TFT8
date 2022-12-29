
-- 메인페이지

-- 계열시너지 데이터
SELECT * FROM origin_synergies WHERE o_icon = 'Gadgeteen';

-- 계열시너지에 맞는 챔피언 아이콘, 이미지, 가격, 이름 데이터
SELECT o.o_title, cham.c_idx, cham.c_name, cham.c_cost, cham.c_icon, cham.c_img FROM origin_synergies o JOIN champion_origin co ON o.o_idx = co.o_idx JOIN champions cham ON co.c_idx = cham.c_idx WHERE o.o_icon = 'Threat' ORDER BY cham.c_cost;

SELECT cham.c_name, agm.a_title, agm.a_content, agm.a_icon FROM champions cham FULL OUTER JOIN augments agm ON cham.c_idx = agm.c_idx ORDER BY rand() LIMIT 5;

-- 챔피언데이터 랜덤으로 10개 가져오기
SELECT c_idx FROM champions ORDER BY rand() LIMIT 10;

-- 해당 챔피언의 계열시너지 가져오기
SELECT cham.c_name, cham.c_img, o.o_title FROM champions cham JOIN champion_origin con ON con.c_idx = cham.c_idx JOIN origin_synergies o ON con.o_idx = o.o_idx WHERE cham.c_idx = 31;

-- 해당 챔피언의 직업시너지 가져오기
SELECT cham.c_name, cl.class_title FROM champions cham JOIN champion_class ccn ON ccn.c_idx = cham.c_idx JOIN class_synergies cl ON ccn.class_idx = cl.class_idx WHERE cham.c_idx = 31;

-- 해당 챔피언의 증강 가져오기
SELECT cham.c_name, agm.a_title, agm.a_content, agm.a_icon FROM augments agm JOIN champions cham ON agm.c_idx = cham.c_idx WHERE cham.c_idx = 31;