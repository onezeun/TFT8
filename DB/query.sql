
-- 메인페이지
-- 계열시너지 데이터
SELECT * FROM origin_synergies WHERE o_icon = 'Gadgeteen';

-- 챔피언데이터 랜덤으로 10개 가져오기
SELECT c_idx FROM champions ORDER BY rand() LIMIT 10;

-- 해당 챔피언의 계열시너지 가져오기
SELECT cham.c_name, cham.c_img, o.o_title FROM champions cham JOIN champion_origin con ON con.c_idx = cham.c_idx JOIN origin_synergies o ON con.o_idx = o.o_idx WHERE cham.c_idx = 31;

-- 해당 챔피언의 직업시너지 가져오기
SELECT cham.c_name, cl.class_title FROM champions cham JOIN champion_class ccn ON ccn.c_idx = cham.c_idx JOIN class_synergies cl ON ccn.class_idx = cl.class_idx WHERE cham.c_idx = 31;

-- 해당 챔피언의 증강 가져오기
SELECT cham.c_name, agm.a_title, agm.a_content, agm.a_icon FROM augments agm JOIN champions cham ON agm.c_idx = cham.c_idx WHERE cham.c_idx = 31;

-- 챔피언 페이지
-- 모든 챔피언 리스트(시너지 추가)
SELECT * FROM champions ORDER BY c_cost;

SELECT o.o_title, o.o_icon FROM champions cham JOIN champion_origin co ON cham.c_idx = co.c_idx JOIN origin_synergies o ON o.o_idx = co.o_idx WHERE cham.c_idx = '31';

SELECT cl.class_title, cl.class_icon FROM champions cham JOIN champion_class ccn ON cham.c_idx = ccn.c_idx JOIN class_synergies cl ON ccn.class_idx = cl.class_idx WHERE cham.c_idx = '31';