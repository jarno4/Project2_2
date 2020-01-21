<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" type="text/css" href="/res/style.css">
		<script type="text/javascript" src="/js/svg/svg.js" ></script>
	</head>
	<body>
		<div class="header">
			<img src="/res/img/logo.png" >

		</div>
		<div class="navbar">
			<a href="#data">Data</a>
			<a href="#map">Map</a>
			<a href="#footer">Contact</a>
		</div>
		<div class="row">
			<div class="side"><a name="data">
				<h2>Data of selected spot</h2>
				<div class="img" style="height: 200px;"></div>
			</div>
			<div class="main"><a name="map">
				<div class="img" style="height: 100%; width: 100%;">
					<span class="tooltip" id="tip">Tooltip</span>
						<svg width="100%" height="100%" onmousemove="handleMouseMove(event)" xmlns="http://www.w3.org/2000/svg" xmlns:amcharts="http://amcharts.com/ammap" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1">
						<defs>
							<amcharts:ammap projection="mercator" leftLongitude="80.051163" topLatitude="30.431317" rightLongitude="88.193593" bottomLatitude="26.348125"></amcharts:ammap>
						</defs>
							<g>
							<path id="NP-BA" title="Bagmati" class="land" d="M507.44,235.82L511.05,241.31L515.85,240.93L519.81,239.21L520.34,240.28L523.57,241.14L527.9,237.06L531.47,235.78L538.42,236.28L544.31,239.2L548.05,244.42L550.62,244.52L557.99,250.62L559.19,250.68L561.83,249.25L574.11,259.77L575.67,263.02L575.79,266.13L580.89,274.44L581.12,276.35L579.87,278.19L580.09,279.29L587.5,282.35L590.93,282.63L590.93,282.63L589.48,288.49L586.11,291.19L588.89,300.71L588.65,303.65L580.95,304.42L578.74,307.19L577.38,311.43L574.35,315.7L572.95,319.28L569.75,320.61L567.35,322.87L568,334.81L561.6,339.3L559.08,338.77L556.95,339.71L556.92,343L554.47,346.71L548.62,345.76L546.6,346.09L543.53,345.26L540.62,343.42L534.81,341.98L534.81,341.98L530.4,339.71L517.51,335.44L511.77,331.26L510.85,323.87L511.56,322L510.11,320.02L508.37,312.31L506.82,309.83L500.8,309.04L490.85,304.85L483.96,306.7L481.17,308.42L477.43,306.58L474.94,310.02L472.41,309.71L471.15,308.85L468.06,309.3L466.29,308.08L465.89,305.65L463.16,304.48L462.3,303.22L458,304.13L449.74,302.45L449.44,300.98L451.97,297.74L451.16,296.11L451.61,294.69L454.46,291.51L454.46,291.51L458.15,294.95L460.28,294.65L463.42,292.72L463.78,290.79L461.91,281.05L464.14,277.6L468.21,273.94L469.07,269.98L470.91,268.41L472.18,263.17L474.42,262.16L476.04,262.77L477.92,262.17L478.94,262.52L480.17,260.09L483.42,257.55L483.9,250.63L485.07,247.63L488.44,245.45L490.02,242.86L490.65,239.14L492.64,237.06L497.36,235.42L497.36,235.42L501.14,236.55L505.77,234.63z"/>
							<path id="NP-BH" title="Bheri" class="land" d="M148.15,147.37L150.36,148.09L148.32,152.3L148.79,154.8L150.55,155.32L152.6,157.22L158.55,155.43L161.49,156.18L163.47,159.67L172.37,160.79L174.22,163.31L177.29,165.09L181.43,162.43L184.42,163.39L187.78,162.34L189.78,160.34L192.5,160.49L197.29,163.87L200.32,164.22L203.11,162.72L204.31,158.95L207.55,154.52L219.97,147.44L226.15,148.4L231.33,148.3L232.47,149.2L231.63,150.96L231.45,160.41L233.48,162.01L240.21,159.89L247.58,162.1L247.58,162.1L242.5,165.08L242.11,171.65L239.55,174.52L230.53,179.4L225.79,185.68L221.94,185.09L219.35,188.47L219.95,192.81L217.58,194.44L212.16,196.54L209.72,204.62L198.02,201.85L195.61,201.7L193.49,202.77L192.26,207.29L194.3,211.9L194.65,216.13L192.2,220.52L189.2,223.14L190.77,227.44L190.61,229.59L185.36,235.88L182.76,235.78L175.72,230.9L170.94,229.22L167.75,232.21L167.93,233.27L166.67,235.9L166.86,237.48L170.35,240.61L171.83,242.87L175.84,242.47L178.51,243.68L178.64,244.69L180.5,246.18L182.55,246.44L184.25,247.77L184.87,250.2L192.95,254.35L194.34,257.52L197.74,261.88L205.71,264.25L206.55,267.95L208.59,268.31L210.1,270.06L210.03,273.77L211.12,275.12L210.84,278.68L206.25,277.76L204.04,278.67L200.44,278.85L197.78,280.64L197.78,280.64L188.15,280.27L183.48,287.9L179.62,287.75L174.18,283.36L171.38,282.82L160.91,273.22L157.79,273.04L154.28,271.67L139.44,262.97L139.66,259.33L137.41,257.52L136.32,254.62L134.25,253.01L129.55,252.77L128.77,253.64L129.37,255.86L123.49,256.95L124.38,254.56L123.47,254.77L122.28,253.77L124.25,253.01L123.57,249.58L115.7,240.8L115.37,235.86L113.26,232.3L102.22,230.04L98.62,227.78L98.62,227.78L101.13,224.31L101.7,221.07L104.75,219.2L109.67,214.61L113.31,210.06L114.19,206.87L121.47,198.74L121.07,195.63L117.15,188.88L115.81,184.87L114.69,178.04L112.5,178.62L110.02,182.84L106.73,180.63L106.69,177.55L100.29,175.95L94.84,173.24L91.38,167.5L98.89,165.02L102.22,164.97L113.43,171.62L121.59,172.31L126.88,171.14L128.53,173.19L131.36,171.94L133.88,172.18L136.01,171.45L139.52,178.28L145.57,184.63L146.15,187.02L148.16,187.94L150.75,187.1L149.69,183.65L147.44,181.92L146.28,178.36L140.79,172.04L139.88,168.74L136.5,165.08L136.47,158.31L140.09,153.39L148.32,148.4z"/>
							<path id="NP-DH" title="Dhawalagiri" class="land" d="M387.65,126.94L388.13,127.13L387.76,129.36L389.67,130.52L392.05,129.31L394.63,130.84L397.39,130.41L401.37,134.66L405.11,135.48L407.17,136.74L407.31,137.67L404.5,140.56L403.43,150.87L399.51,155.75L400.12,158.09L404.39,162.77L404.53,164.05L403.08,167.11L402.4,173.8L402.4,173.8L399.14,174.82L391.04,183.06L389.15,183.37L385.51,180.99L382.54,181.26L382.01,185.62L380.69,187.88L376.37,191.28L370.77,194.13L370.84,197.3L372.03,199.39L374.24,200.91L376,205.04L375.4,206.42L373.15,205.77L369.74,207.69L369.5,209.12L371.26,212.78L371.27,215.03L367.06,218.32L362.56,223.36L360.82,228.27L359.19,228.74L358.44,230.74L362.79,232.59L365.05,235.22L366.87,240.2L366.52,241.84L370.66,244.51L370.47,245.58L368.51,248.75L366.46,247.39L364.43,247.81L363.33,250.82L364.1,251.94L363.48,256.21L360.6,258.98L360.21,260.97L361.03,261.83L360.46,267.02L357.45,270.81L353.86,272.71L349.19,271.07L349.19,271.07L348.31,270.93L346.48,264.75L345.25,263.49L341.98,262.4L340.19,260.84L336.24,261.95L332.31,260L328.95,255.1L327.38,255.37L323.23,252.67L319,251.9L317.56,250.34L319.91,246.95L320.29,244.55L319.72,243.54L315.15,243.75L313.65,242.44L311.08,243.79L308.58,243.52L301.68,245.29L298.61,245.14L298.61,245.14L298.55,243.19L293.85,237.85L286.41,233.67L282.67,228.78L280.87,227.53L279.5,224.48L277.27,222.07L277.2,220.59L279.74,220.09L279.1,218.32L277.45,217.27L276.87,215.9L278.03,214.71L280.67,213.9L282.31,211.27L287.12,212.23L288.16,210.12L287.06,207.48L285.56,206.42L287.63,204.51L294.01,204.98L298.54,203.44L300.56,201.83L302.32,200.01L304.64,193.75L303.74,191.2L304.15,190.78L304.15,190.78L305.05,189.85L308.97,192.52L312.71,192.98L314.46,193.94L316.91,193.75L324.24,191.42L328.25,188.82L333.65,187.23L337.57,185.14L337.73,180.28L339.37,175.91L350.66,161.91L350.65,154.94L351.75,151.08L352.86,149.48L355.68,148.99L357.29,145.28L356.71,143.64L353.23,140.01L353.23,140.01L354.63,138.2L356.25,137.55L360.35,133.91L366.87,134.75L368.57,134.05L371.5,129.68L375.83,127.19L379.9,126.26L382.95,127.09L385.28,126.01z"/>
							<path id="NP-GA" title="Gandaki" class="land" d="M413.53,171L414.73,171.53L416.19,174.42L418.67,175.03L421.82,177.1L427.21,177.82L429.86,180.45L430.72,182.54L430.53,184.64L429.24,187.15L429.1,190.65L432.03,189.81L435.27,191.96L438.43,192.83L442.69,192.21L447.53,190.35L454.04,192.69L454.52,195.19L457.01,199.7L455.37,203.61L455.79,204.51L460.61,206.29L468.63,206.95L472.26,209.48L474.42,207.53L480.13,204.37L484.09,205.78L486.06,205.46L489.99,200.6L493.17,198.12L499.09,197.27L501.03,198.72L505.16,203.93L504.09,205.8L504.51,210.33L503.47,211.07L501.37,219.12L499.94,221.85L497.36,235.42L497.36,235.42L492.64,237.06L490.65,239.14L490.02,242.86L488.44,245.45L485.07,247.63L483.9,250.63L483.42,257.55L480.17,260.09L478.94,262.52L477.92,262.17L476.04,262.77L474.42,262.16L472.18,263.17L470.91,268.41L469.07,269.98L468.21,273.94L464.14,277.6L461.91,281.05L463.78,290.79L463.42,292.72L460.28,294.65L458.15,294.95L454.46,291.51L454.46,291.51L450.19,285.92L446.19,286.27L443.1,288.91L439.86,290.49L439.25,291.66L431.15,294.31L433.29,300.39L432.96,301.17L432.96,301.17L424.78,299.59L422.61,301.73L419.76,298.24L418.89,294.13L415.73,290.18L406.2,289.91L397.73,288.58L392.06,289.27L379.83,287.05L369.24,287.17L366.28,284.71L360.99,283.17L357.29,282.85L353.96,284.35L348.5,281.4L345.96,280.86L335.27,281.77L333.13,280.93L332.97,279.92L335.28,277.76L345.71,275.73L347.28,274.75L349.19,271.07L349.19,271.07L353.86,272.71L357.45,270.81L360.46,267.02L361.03,261.83L360.21,260.97L360.6,258.98L363.48,256.21L364.1,251.94L363.33,250.82L364.43,247.81L366.46,247.39L368.51,248.75L370.47,245.58L370.66,244.51L366.52,241.84L366.87,240.2L365.05,235.22L362.79,232.59L358.44,230.74L359.19,228.74L360.82,228.27L362.56,223.36L367.06,218.32L371.27,215.03L371.26,212.78L369.5,209.12L369.74,207.69L373.15,205.77L375.4,206.42L376,205.04L374.24,200.91L372.03,199.39L370.84,197.3L370.77,194.13L376.37,191.28L380.69,187.88L382.01,185.62L382.54,181.26L385.51,180.99L389.15,183.37L391.04,183.06L399.14,174.82L402.4,173.8L402.4,173.8L403.93,174.2L407.44,172.48z"/>
							<path id="NP-JA" title="Janakpur" class="land" d="M606.82,274.72L615.89,275.21L619.26,278.72L624.16,276.46L626.38,276.31L626.83,276.79L624.2,280.69L625.67,282.49L626.76,282.5L630.99,279.74L635.32,281.61L636.55,279.13L635.62,277.55L635.62,277.55L639.16,281.96L640.51,286.46L639.41,288.77L639.04,292.98L641.61,300.02L641.24,304.62L637.97,306.65L633.13,308.35L631.09,313.13L626.76,318.33L625.87,320.5L622.45,322.47L618.08,327.77L616.62,330.94L611.87,334.92L608.11,341.09L608.23,346.8L609.55,350.35L607.01,355.42L608.12,356.5L612.08,356.9L622.94,364.72L620.64,371.85L621.25,374.78L620.87,376.94L622.09,379.48L619.95,388.41L618.63,389.7L614.09,391.05L612.09,393.74L609.35,395.82L605.33,396.12L600.28,393.74L599.02,394.28L600.06,403.95L598.99,409.47L600.39,413.56L602.73,414.94L604.44,418.68L601.41,424.9L601.41,424.9L600.94,424.45L597.49,425.9L597.56,423.45L592.32,421.56L590.66,419.94L586.92,419.1L585.04,420.26L581.23,419.88L579.35,420.94L578.15,424.67L575,425.42L572.41,428.22L571.65,428.01L569.68,429.7L568.71,429.67L569.55,427.31L569.07,425.46L566.96,424.95L566.92,426.09L565.74,426.02L564.16,423.62L560.88,422.9L557.77,420.86L557.65,419.3L556.47,417.5L556.78,412.79L557.58,411.23L557.04,410.13L557.63,405.04L556.68,402.65L551.93,399.57L548.51,398.65L547.91,396.55L546.65,396.37L545.18,398.22L543.11,399.18L542.77,398.1L541.93,397.93L541.05,399.99L540.23,399.77L539.83,400.75L538.86,400.36L536.65,403.05L534.53,403.06L534.08,404.81L532.48,404.21L532.17,405.51L530.38,406.42L525.53,405.45L522.36,408.76L520.85,408.49L518.38,410.85L518.38,410.85L520.86,401.81L525.98,394.35L527.71,389.98L527.79,386.26L526.4,382.27L527.89,377.79L534.63,371.14L534.29,368.96L536.51,361.67L536.37,359.55L534.83,355.95L532.98,353.77L531.17,352.9L529.99,348.95L530.46,346.83L534.81,341.98L534.81,341.98L540.62,343.42L543.53,345.26L546.6,346.09L548.62,345.76L554.47,346.71L556.92,343L556.95,339.71L559.08,338.77L561.6,339.3L568,334.81L567.35,322.87L569.75,320.61L572.95,319.28L574.35,315.7L577.38,311.43L578.74,307.19L580.95,304.42L588.65,303.65L588.89,300.71L586.11,291.19L589.48,288.49L590.93,282.63L590.93,282.63L594.43,281.44L596.91,279.35L595.54,276.77L594.97,273.78L592.22,271.15L591.58,268.06L592.26,261.44L594.56,260.11L600.84,253.7L601.76,254.39L601.78,256.23L605.23,261.47L603.29,264.04L604.47,271.37L605.64,273.9z"/>
							<path id="NP-KA" title="Karnali" class="land" d="M156.18,0.26L157.67,1.49L161.34,2.17L164.45,4.36L168.35,5.48L186.99,8.95L192.09,11.08L196.66,10.42L204.27,11.28L206.53,12.15L207.08,13.09L205.4,15.46L207.08,23L210.98,26.58L211.97,29.14L212,31.29L209.79,37L210.88,38.58L218.91,41.86L222.13,42.19L223.76,43.69L229.33,45.68L231.37,45.6L233.82,47.64L235.85,47.33L238.74,48.47L240.36,48.19L242.27,50.93L248.49,54.28L250.55,56.63L250.96,58.81L256.41,64.43L260.28,67.12L262.81,70.77L263.17,72.94L265.12,75.94L271.65,78.75L274.22,81.73L275.35,82.35L281.76,82.61L286.7,85.62L289.13,85.63L291.86,86.96L297.2,90.73L303.67,91.56L305.29,93.92L308.38,93.86L313.11,96L314.64,98.33L314.72,102.9L321.58,105.24L322.27,106.22L321.88,110.31L328.4,116.54L329.38,119.87L331.88,122.85L333.17,129.03L337.44,131.64L340.71,136.71L343.6,139.12L350.73,142.45L352.51,141.72L353.23,140.01L353.23,140.01L356.71,143.64L357.29,145.28L355.68,148.99L352.86,149.48L351.75,151.08L350.65,154.94L350.66,161.91L339.37,175.91L337.73,180.28L337.57,185.14L333.65,187.23L328.25,188.82L324.24,191.42L316.91,193.75L314.46,193.94L312.71,192.98L308.97,192.52L305.05,189.85L304.15,190.78L304.15,190.78L296.58,186.84L292.73,186.02L284.96,181.93L279.57,181.24L274.63,182.29L272.21,181.25L269.92,181.8L260.58,177.54L260.92,173.08L257.9,169.9L254.59,164.77L250.42,163.82L247.58,162.1L247.58,162.1L240.21,159.89L233.48,162.01L231.45,160.41L231.63,150.96L232.47,149.2L231.33,148.3L226.15,148.4L219.97,147.44L207.55,154.52L204.31,158.95L203.11,162.72L200.32,164.22L197.29,163.87L192.5,160.49L189.78,160.34L187.78,162.34L184.42,163.39L181.43,162.43L177.29,165.09L174.22,163.31L172.37,160.79L163.47,159.67L161.49,156.18L158.55,155.43L152.6,157.22L150.55,155.32L148.79,154.8L148.32,152.3L150.36,148.09L148.15,147.37L148.15,147.37L145.87,146.87L142.5,143.82L141.2,141.18L141.87,133.5L140.24,132.11L139.52,130.27L142.06,127.12L150.46,119.8L154.21,119.7L157.06,122.82L157.49,125.59L159.1,126.27L165.77,123.28L169.19,120.42L172.28,116.12L173.22,112.28L171.06,103.78L169.52,101.91L169.13,92.37L167.03,90.51L163.77,90.23L162.74,84L162.99,81.52L166.59,79.05L167.51,76.6L167.25,74.07L168.6,68.09L170.01,66.4L171.19,66.27L171.7,61.7L171.11,58.4L162.59,57.11L160.89,54.92L158.02,54.06L150.99,56.36L147.47,56.09L143.32,58.63L141.9,58.62L139.35,59.93L138.67,53.89L138.97,49.68L137.21,47.71L133.18,45.79L130.29,48.1L127.91,48.16L125.52,46.05L122.3,45.68L118.37,42.4L118.37,42.4L119.4,36.73L119.18,32.71L121.86,31.72L126.45,31.86L131.52,24.65L131.64,20.55L133.62,14.54L131.49,9.13L131.2,5.94L132.29,2.94L135.76,1.61L140.62,1.2L141.85,1.84L144.19,5.38L149.84,7.03L150.73,0.76z"/>
							<path id="NP-KO" title="Koshi" class="land" d="M695.66,291.66L705.67,292.76L709.26,289.96L716.48,291.44L723.87,288.97L725.06,289.6L724.04,290.93L724.45,291.5L728.23,292.21L733.43,290.47L737.72,287.65L739.69,287.18L740.77,288.04L740.96,292.64L742.92,293.53L746.65,291.1L750.67,289.98L750.67,289.98L749.05,301.37L746.74,304.96L744.48,306.32L743.91,308.59L742.66,310.13L740.94,308.26L739.53,307.88L737.96,310.02L737.11,315.77L736.15,317.77L731.48,320.55L728.91,337.49L729.31,344.27L732.56,347.94L734.03,351.66L738.46,354.24L745.4,354.76L749.66,355.83L756.78,359.24L757.81,360.58L753.71,364.97L752.75,367.16L749.55,370.11L741.9,374.15L736.82,380.48L735.97,384.19L732.86,388.25L735.2,393.54L734.69,395.94L739.81,398.13L741.09,399.12L741.9,401.05L744.49,401.87L750.13,405.33L750.63,407.4L749.67,413.36L746.38,422.73L747.69,428.43L746.1,429.9L747.71,439.73L749.82,444.44L749.82,444.44L748.71,444.45L748.66,446.56L746,447.72L746.13,449.11L742.33,449.33L741.85,450.4L739.98,450.24L739.62,449L736.54,447.77L735.98,446.29L730.49,444.29L727.44,443.99L724.09,446.03L720.16,446.28L718.33,447.51L716.92,449.9L717.17,452.63L715.49,453.96L712.77,451.39L711.75,451.97L710.5,451.1L708.17,451.18L707.68,447.17L704.61,446.81L703.38,447.84L702.86,446.89L700.39,446.78L700.7,447.8L697.42,447.68L691.02,442.61L689.03,427.93L686.41,427.85L686.44,429.4L683.49,433.69L680.61,434.32L679.74,435.26L676.55,435.52L676.55,435.52L676.15,431.23L677.48,426.98L681.72,420.34L684.47,417.83L690.1,409.85L698.55,401.57L700.21,399.24L701.05,394.88L699.22,392.62L696.43,392.12L688.81,394.08L683.62,397.5L681.1,395.13L680.13,393.25L681.17,388.89L678.89,384.31L678.75,375.85L674.88,373.05L674.37,370.92L676.56,364.21L676.36,361.12L675.03,359.79L674.29,356.19L676.18,354.96L678.29,355.05L682.1,350.88L679.05,349.92L679.16,346.43L675.9,342.83L674.9,337.1L678.33,332.11L679.85,318.73L682.53,313.31L682.91,306.99L684.34,303.62L681.06,300.11L681.46,298.04L684.37,294.14L680.81,284.63L681.46,277.81L681.46,277.81L684.95,277.79L689.08,281.02L692.02,284.62L696.13,286.55L697.5,288.51L695.26,290.81z"/>
							<path id="NP-LU" title="Lumbini" class="land" d="M298.61,245.14L301.68,245.29L308.58,243.52L311.08,243.79L313.65,242.44L315.15,243.75L319.72,243.54L320.29,244.55L319.91,246.95L317.56,250.34L319,251.9L323.23,252.67L327.38,255.37L328.95,255.1L332.31,260L336.24,261.95L340.19,260.84L341.98,262.4L345.25,263.49L346.48,264.75L348.31,270.93L349.19,271.07L349.19,271.07L347.28,274.75L345.71,275.73L335.28,277.76L332.97,279.92L333.13,280.93L335.27,281.77L345.96,280.86L348.5,281.4L353.96,284.35L357.29,282.85L360.99,283.17L366.28,284.71L369.24,287.17L379.83,287.05L392.06,289.27L397.73,288.58L406.2,289.91L415.73,290.18L418.89,294.13L419.76,298.24L422.61,301.73L424.78,299.59L432.96,301.17L432.96,301.17L432.38,302.92L429.25,306.17L425.66,307.5L424.19,306.39L414.54,310.87L413.23,312.35L410.45,313.17L409.94,314.38L406.46,315.76L404.2,320.53L402.34,322.36L398,323.24L381.83,324.19L380.88,324.85L380.94,325.96L385.19,327.15L383.23,329.79L381.84,333.65L381.84,333.65L380.64,333.04L378.62,334.02L374.59,334.57L372.28,333.35L371.35,334.33L370.92,335.99L375.77,341.05L373.83,344.48L369.58,341.16L348.96,330.8L328.18,329.78L327.38,330.06L327.51,331.06L328.64,332.41L327.08,335.23L328.5,336.72L328.55,338.53L327.48,339.6L327.11,341.38L325.46,342.19L325.39,343.33L323.82,344.98L319.32,346.16L316.06,344.24L315.2,342.6L315.44,340.5L309.89,336.46L308.86,334.42L306.76,332.53L293.87,333.06L290.93,332.54L283.76,330.37L282.69,328.01L281.36,327.26L277.19,327.74L273.02,327.17L270.8,327.81L263.28,327.21L262.91,325.76L264.04,324.71L263.22,321.93L264.58,318.12L262.89,314.92L263.51,312.79L262.42,311.74L262.41,310.49L261.16,310.22L260.75,309.41L261.1,306.51L260.03,304.14L260.51,302.1L259.27,303.07L259.27,303.07L259.16,301.29L260.91,299.84L268.72,300.99L271.32,298.77L274.05,298.27L275.44,296.32L273.9,295.38L271.01,295.12L267.38,292.64L270.05,285.65L273.92,283.25L278.29,283.59L284.7,281.52L292.3,281.16L292.32,278.82L290.51,276.26L286.06,273.52L287.12,266.24L291.83,261.75L293.8,260.96L296.21,258.18L292.51,255.74L292.76,251.16L291.57,249.9L294.13,247.57L297.78,246.35z"/>
							<path id="NP-MA" title="Mahakali" class="land" d="M85.52,28.42L88.93,27.71L89.87,26.83L91.15,27.29L94.54,26.06L98.67,25.92L101.32,28.64L103.28,32.02L102.02,35.02L102.11,38.88L103.45,40.7L105,41.05L105,41.05L101.51,42.8L100.07,44.71L97.25,45.73L95.49,47.34L92.97,54.77L94.32,58.1L97.27,61.64L97.43,65.36L99.63,67.88L100.64,72.4L98.39,76.66L89.73,78.83L83.8,79.07L71.04,84.9L72.23,89.82L71.8,94.12L70.5,97.06L68.61,97.58L69.07,100.56L72.66,103.02L73.08,106.47L77.45,106.38L79.82,107.9L81,109.51L81.5,112.23L79.16,116.58L76.46,118.78L72.25,119.33L68.63,121.61L69.48,127.24L66.38,133.21L64.04,135.4L63.4,137.78L51.47,143.32L50.08,147.69L47.25,149.22L48.53,152L45.36,161.1L45.07,163.31L45.77,165.65L44.37,178.57L48.18,188.02L48.65,191.28L47.83,195.26L47.83,195.26L43.77,197.97L44.97,207.55L46.18,208.79L45.17,210.02L41.9,207.1L40.17,206.62L40.37,205.13L39.56,203.04L36.87,201.13L31.42,201.93L30.08,201.37L29.36,199.54L26.46,197.86L25.52,194.53L21.27,193.07L19.56,191.39L20.39,189.3L19.55,188.19L14.49,187.46L6.89,180.52L1.86,180.36L0.7,179.73L0.03,177.94L0.32,169.74L3.85,162.74L5.67,162.31L6.09,160.39L7.6,159.96L6.58,159.07L6.55,156.8L7.86,154.4L7.13,152.56L8.7,148.96L12.01,145.89L15.31,147.33L17.35,147.38L18.57,145.71L20.62,144.52L19.61,142.24L19.67,139.71L18.33,138.02L18.69,136.15L19.43,136.22L19.73,137.11L21.58,137.46L22.39,138.77L23.42,138.47L22.96,134.37L23.61,133.69L23.97,129L25.09,127.14L24.82,124.57L22.87,124.09L22.66,122.57L21.75,122.19L21.57,120.52L20.76,119.81L21.32,118.82L20.97,116.54L18.15,114.97L17.89,111.31L17.96,110.74L21.25,109.44L21.98,110.53L23.45,110.22L22.38,108.09L23.42,106.24L24.73,106.83L24.93,105.45L28.41,102.8L28.83,101.14L27.91,100.45L28.2,98.98L31.57,96.74L32.73,96.72L34.32,93.67L34.26,91.69L35.29,88.84L32.44,85.69L31,80.64L30.04,79.36L30.39,76.67L31.68,76.72L33.15,75.44L33.92,72.07L36.68,70.32L38.24,71.17L39.84,70.79L42.41,71.35L43.54,68.62L48.72,63.9L50.04,60.24L49.86,57.05L52.59,53.62L55.4,52.46L60.56,52.82L64.44,48.44L66.72,48.15L69.16,42.13L71.12,40.89L73.27,37.71L76.25,36.95L77.22,35.17L79.51,33.65L79.8,32.14L78.83,28.96L82.25,23.98L83.73,24.06L83.98,27.37z"/>
							<path id="NP-ME" title="Mechi" class="land" d="M789.59,286.89L792.12,287.23L793.45,286.64L797.65,287.32L799.89,288.98L799.85,290.41L797.46,292.5L799.63,295.93L797.87,300.21L795.61,302.32L794.95,309.12L792.45,311.53L791.04,315.91L788.32,318.15L788.32,320.92L786.72,322.3L786.34,323.55L787.01,324.27L784.78,328.45L785.1,330.81L787.09,333.99L787.09,335.9L785.14,337.53L784.49,340.63L784.61,342.32L786.17,343.87L786.53,345.56L783.61,351.88L783.42,355.49L781.84,358.58L781.88,364.79L779.32,370.43L782.65,373.38L782.96,376.6L784.69,378.5L786.98,379.27L788.49,378.79L789.33,381.93L791.58,384.03L793.45,384.26L792.33,388.45L794.38,390.62L794.39,394.83L797.56,397.93L796.81,400.41L798.39,404.93L798.58,413.57L796.61,417.64L795.94,422.6L794.05,424.05L793.22,426.23L793.28,429.34L791.56,429.85L791.5,430.97L790.72,431.39L791.28,433.18L790.05,436.48L790.95,441.2L789.77,442.49L790.43,443.31L788.82,445.9L783.55,450.82L783.33,453.2L781.27,453.25L780.2,452.41L779.52,451.33L779.6,449.1L777.06,448.57L773.32,446.32L772.17,444.73L773.06,443.33L770.49,443.01L771.54,441.96L769.57,438.93L769.16,440.04L766.51,441.47L766.97,442.66L765.84,443.36L765.56,444.45L763.5,443.93L763.64,442.9L762.17,441.77L759.53,440.93L759.81,441.47L758.33,442.72L758.63,444.57L757.31,447.35L756.08,447.47L755.68,446.39L754.73,446.29L754.26,447.5L753.18,447.02L752.27,445.35L749.82,444.44L749.82,444.44L747.71,439.73L746.1,429.9L747.69,428.43L746.38,422.73L749.67,413.36L750.63,407.4L750.13,405.33L744.49,401.87L741.9,401.05L741.09,399.12L739.81,398.13L734.69,395.94L735.2,393.54L732.86,388.25L735.97,384.19L736.82,380.48L741.9,374.15L749.55,370.11L752.75,367.16L753.71,364.97L757.81,360.58L756.78,359.24L749.66,355.83L745.4,354.76L738.46,354.24L734.03,351.66L732.56,347.94L729.31,344.27L728.91,337.49L731.48,320.55L736.15,317.77L737.11,315.77L737.96,310.02L739.53,307.88L740.94,308.26L742.66,310.13L743.91,308.59L744.48,306.32L746.74,304.96L749.05,301.37L750.67,289.98L750.67,289.98L753.02,290.82L753.99,293.07L755.55,291.05L756.49,290.97L760.81,293.29L762.78,290.61L765.9,291.23L768.58,293.94L769.31,293.36L771.54,293.46L772.89,292.86L775.09,290.24L776.64,285.79L781.6,281.69L785.76,282.9z"/>
							<path id="NP-NA" title="Narayani" class="land" d="M454.46,291.51L451.61,294.69L451.16,296.11L451.97,297.74L449.44,300.98L449.74,302.45L458,304.13L462.3,303.22L463.16,304.48L465.89,305.65L466.29,308.08L468.06,309.3L471.15,308.85L472.41,309.71L474.94,310.02L477.43,306.58L481.17,308.42L483.96,306.7L490.85,304.85L500.8,309.04L506.82,309.83L508.37,312.31L510.11,320.02L511.56,322L510.85,323.87L511.77,331.26L517.51,335.44L530.4,339.71L534.81,341.98L534.81,341.98L530.46,346.83L529.99,348.95L531.17,352.9L532.98,353.77L534.83,355.95L536.37,359.55L536.51,361.67L534.29,368.96L534.63,371.14L527.89,377.79L526.4,382.27L527.79,386.26L527.71,389.98L525.98,394.35L520.86,401.81L518.38,410.85L518.38,410.85L515.54,409.68L511.29,409.41L508.82,408.49L505.85,408.76L502.91,402.83L504.33,400.62L504.51,396.87L496.13,396.58L493.86,397.29L494.39,397.92L493.85,398.5L493.08,398.03L491.69,399L488.63,398.6L487.96,398.3L488.51,396.26L491.06,395.15L486.34,394.07L485.37,393.43L485.94,392.79L485.44,391.73L482.47,391.24L483.43,388.97L481.5,386.56L475.53,385.41L471.31,383.33L471.29,381.55L468.46,380.19L467.2,380.35L465.34,382.84L463.4,380.49L461.99,382.45L450.48,377.33L450.91,374.44L453.64,371.2L453.28,370.12L453.87,369.87L454.68,364.91L453.88,364.72L453.57,363.65L454.38,362.54L454.91,357.93L450.1,347.98L448.05,345.19L434.85,342.9L433.36,343.47L428.65,341.64L420.41,341.17L416.79,339.41L415.85,340.15L414.2,338.81L413.91,335.68L412.51,334.64L412.01,332.97L409.49,332.98L409.09,334.05L408.41,334.08L407.67,331.01L405.28,330.6L402.18,328.9L401.56,327.79L402.08,325.37L399.61,326.23L398.44,325.11L397.38,325.31L396.69,327.99L395.56,328.94L394.24,328.98L392.19,333.67L391.21,333.45L389.46,334.54L387.03,333.49L385.34,334.29L384.05,333.42L381.84,333.65L381.84,333.65L383.23,329.79L385.19,327.15L380.94,325.96L380.88,324.85L381.83,324.19L398,323.24L402.34,322.36L404.2,320.53L406.46,315.76L409.94,314.38L410.45,313.17L413.23,312.35L414.54,310.87L424.19,306.39L425.66,307.5L429.25,306.17L432.38,302.92L432.96,301.17L432.96,301.17L433.29,300.39L431.15,294.31L439.25,291.66L439.86,290.49L443.1,288.91L446.19,286.27L450.19,285.92z"/>
							<path id="NP-RA" title="Rapti" class="land" d="M247.58,162.1L250.42,163.82L254.59,164.77L257.9,169.9L260.92,173.08L260.58,177.54L269.92,181.8L272.21,181.25L274.63,182.29L279.57,181.24L284.96,181.93L292.73,186.02L296.58,186.84L304.15,190.78L304.15,190.78L303.74,191.2L304.64,193.75L302.32,200.01L300.56,201.83L298.54,203.44L294.01,204.98L287.63,204.51L285.56,206.42L287.06,207.48L288.16,210.12L287.12,212.23L282.31,211.27L280.67,213.9L278.03,214.71L276.87,215.9L277.45,217.27L279.1,218.32L279.74,220.09L277.2,220.59L277.27,222.07L279.5,224.48L280.87,227.53L282.67,228.78L286.41,233.67L293.85,237.85L298.55,243.19L298.61,245.14L298.61,245.14L297.78,246.35L294.13,247.57L291.57,249.9L292.76,251.16L292.51,255.74L296.21,258.18L293.8,260.96L291.83,261.75L287.12,266.24L286.06,273.52L290.51,276.26L292.32,278.82L292.3,281.16L284.7,281.52L278.29,283.59L273.92,283.25L270.05,285.65L267.38,292.64L271.01,295.12L273.9,295.38L275.44,296.32L274.05,298.27L271.32,298.77L268.72,300.99L260.91,299.84L259.16,301.29L259.27,303.07L259.27,303.07L256.73,303.45L255.34,302.95L254.93,303.77L252.69,303.92L249.19,305.68L243.77,306.85L241.16,306.43L237.04,307.93L235.44,307.84L228.48,303.66L226.87,300.89L219.36,296.62L210.73,289.09L206.09,286.9L205.28,287.73L202.75,286.87L200.35,284.69L197.78,280.64L197.78,280.64L200.44,278.85L204.04,278.67L206.25,277.76L210.84,278.68L211.12,275.12L210.03,273.77L210.1,270.06L208.59,268.31L206.55,267.95L205.71,264.25L197.74,261.88L194.34,257.52L192.95,254.35L184.87,250.2L184.25,247.77L182.55,246.44L180.5,246.18L178.64,244.69L178.51,243.68L175.84,242.47L171.83,242.87L170.35,240.61L166.86,237.48L166.67,235.9L167.93,233.27L167.75,232.21L170.94,229.22L175.72,230.9L182.76,235.78L185.36,235.88L190.61,229.59L190.77,227.44L189.2,223.14L192.2,220.52L194.65,216.13L194.3,211.9L192.26,207.29L193.49,202.77L195.61,201.7L198.02,201.85L209.72,204.62L212.16,196.54L217.58,194.44L219.95,192.81L219.35,188.47L221.94,185.09L225.79,185.68L230.53,179.4L239.55,174.52L242.11,171.65L242.5,165.08z"/>
							<path id="NP-SA" title="Sagarmatha" class="land" d="M657.09,262.19L657.64,266.73L658.77,268.04L660.45,267.82L663.63,270.88L667.77,269.46L668.85,269.73L669.64,271.92L674.68,274.52L676.39,277.09L678.87,277.97L681.46,277.81L681.46,277.81L680.81,284.63L684.37,294.14L681.46,298.04L681.06,300.11L684.34,303.62L682.91,306.99L682.53,313.31L679.85,318.73L678.33,332.11L674.9,337.1L675.9,342.83L679.16,346.43L679.05,349.92L682.1,350.88L678.29,355.05L676.18,354.96L674.29,356.19L675.03,359.79L676.36,361.12L676.56,364.21L674.37,370.92L674.88,373.05L678.75,375.85L678.89,384.31L681.17,388.89L680.13,393.25L681.1,395.13L683.62,397.5L688.81,394.08L696.43,392.12L699.22,392.62L701.05,394.88L700.21,399.24L698.55,401.57L690.1,409.85L684.47,417.83L681.72,420.34L677.48,426.98L676.15,431.23L676.55,435.52L676.55,435.52L675.46,435.66L675.23,438.63L671.74,438.82L671.78,441.57L668.35,442.25L666.48,443.94L659.17,441.98L655.89,445.62L652.72,444.06L652.17,442.9L645.74,440.79L643.99,438.67L639.95,437.59L636.53,432.83L632.86,432.74L628.86,430.02L622.76,428L622.58,427L617.34,425.76L617.58,424.6L614.17,424.24L612.75,424.99L608.82,424.95L606.29,427.5L603.38,427L602.97,424.92L601.41,424.9L601.41,424.9L604.44,418.68L602.73,414.94L600.39,413.56L598.99,409.47L600.06,403.95L599.02,394.28L600.28,393.74L605.33,396.12L609.35,395.82L612.09,393.74L614.09,391.05L618.63,389.7L619.95,388.41L622.09,379.48L620.87,376.94L621.25,374.78L620.64,371.85L622.94,364.72L612.08,356.9L608.12,356.5L607.01,355.42L609.55,350.35L608.23,346.8L608.11,341.09L611.87,334.92L616.62,330.94L618.08,327.77L622.45,322.47L625.87,320.5L626.76,318.33L631.09,313.13L633.13,308.35L637.97,306.65L641.24,304.62L641.61,300.02L639.04,292.98L639.41,288.77L640.51,286.46L639.16,281.96L635.62,277.55L635.62,277.55L633.67,275.4L634.21,271.45L635,269.8L638.58,267.66L641.75,263.57L643.8,263.08L646.89,264.15L651.21,260.81L655.25,260.87z"/>
							<path id="NP-SE" title="Seti" class="land" d="M110.77,44.51L112.7,45.65L114.1,45.43L115.83,44.92L118.37,42.4L118.37,42.4L122.3,45.68L125.52,46.05L127.91,48.16L130.29,48.1L133.18,45.79L137.21,47.71L138.97,49.68L138.67,53.89L139.35,59.93L141.9,58.62L143.32,58.63L147.47,56.09L150.99,56.36L158.02,54.06L160.89,54.92L162.59,57.11L171.11,58.4L171.7,61.7L171.19,66.27L170.01,66.4L168.6,68.09L167.25,74.07L167.51,76.6L166.59,79.05L162.99,81.52L162.74,84L163.77,90.23L167.03,90.51L169.13,92.37L169.52,101.91L171.06,103.78L173.22,112.28L172.28,116.12L169.19,120.42L165.77,123.28L159.1,126.27L157.49,125.59L157.06,122.82L154.21,119.7L150.46,119.8L142.06,127.12L139.52,130.27L140.24,132.11L141.87,133.5L141.2,141.18L142.5,143.82L145.87,146.87L148.15,147.37L148.15,147.37L148.32,148.4L140.09,153.39L136.47,158.31L136.5,165.08L139.88,168.74L140.79,172.04L146.28,178.36L147.44,181.92L149.69,183.65L150.75,187.1L148.16,187.94L146.15,187.02L145.57,184.63L139.52,178.28L136.01,171.45L133.88,172.18L131.36,171.94L128.53,173.19L126.88,171.14L121.59,172.31L113.43,171.62L102.22,164.97L98.89,165.02L91.38,167.5L94.84,173.24L100.29,175.95L106.69,177.55L106.73,180.63L110.02,182.84L112.5,178.62L114.69,178.04L115.81,184.87L117.15,188.88L121.07,195.63L121.47,198.74L114.19,206.87L113.31,210.06L109.67,214.61L104.75,219.2L101.7,221.07L101.13,224.31L98.62,227.78L98.62,227.78L96.36,226.21L95.71,227.54L94.26,226.4L95.97,224.25L95.02,223.47L93.69,223.86L93.42,222.23L92.27,222.02L89.33,223.71L88.73,222.98L89.93,221.91L87.98,222.48L86.1,221.89L86.39,220.2L85.07,221.51L84.32,221.42L84.18,220.62L83.44,221.27L82.47,220.78L82.16,218.88L83.18,217.12L81.47,215.93L78.76,215.9L78.89,217.31L76.53,216.69L74.78,214.67L71.14,213.7L71.24,211.92L69.69,210.71L69.59,209.17L67.23,208.31L66.06,209L62.84,208.05L62.07,206.84L62.44,205.1L60.78,204.84L60.72,203.18L59.68,202.3L59.51,200.86L55.85,201.21L53.49,199.84L52.16,200.17L52.34,199.11L51.21,198.48L51.86,196.46L47.83,195.26L47.83,195.26L48.65,191.28L48.18,188.02L44.37,178.57L45.77,165.65L45.07,163.31L45.36,161.1L48.53,152L47.25,149.22L50.08,147.69L51.47,143.32L63.4,137.78L64.04,135.4L66.38,133.21L69.48,127.24L68.63,121.61L72.25,119.33L76.46,118.78L79.16,116.58L81.5,112.23L81,109.51L79.82,107.9L77.45,106.38L73.08,106.47L72.66,103.02L69.07,100.56L68.61,97.58L70.5,97.06L71.8,94.12L72.23,89.82L71.04,84.9L83.8,79.07L89.73,78.83L98.39,76.66L100.64,72.4L99.63,67.88L97.43,65.36L97.27,61.64L94.32,58.1L92.97,54.77L95.49,47.34L97.25,45.73L100.07,44.71L101.51,42.8L105,41.05L105,41.05z"/>
							</g>
						</svg>
					<!--<iframe src="https://www.google.com/maps/d/embed?mid=1qQZQovnIfg23BsG1HHcwamg5AChzZVPA&hl=nl" width="640" height="480"></iframe> -->
					</div>
				<div class="img" style="height: 200px;"></div>
				<div class="img" style="height: 200px;"></div>
			</div>
		</div>
		<div class="footer"><a name="footer">
			<div class="img" style="height: 200px;"></div>
		</div>
	</body>