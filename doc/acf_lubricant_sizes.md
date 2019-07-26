# ACF + Facet WP: Lubricant Sizes   
    
    // ACF select, multi, label

    $lubricant_sizes = get_field('lubricant_sizes');

    if ($lubricant_sizes) :
        echo '<div class="meta meta--sizes">';
            echo $icons_sizes;
            echo '<span class="meta__value">';
                echo implode(', ', $lubricant_sizes);
            echo '</span>';
        echo '</div>';
    endif;

    // Facet WP fselect, multi, widen, raw value
    // lubricant_sizes

    echo '<div class="facet"><label>Price per Oz</label>' .facetwp_display( 'facet', 'lubricant_price' ). '</div>';   


001 : Single Use	
002 : 1 oz
003 : 1.1 oz
004 : 1.2 oz
005 : 1.3 oz
006 : 1.4 oz
007 : 1.5 oz
008 : 1.6 oz
009 : 1.7 oz
010 : 1.8 oz
011 : 1.9 oz
012 : 2 oz
013 : 2.1 oz
014 : 2.2 oz
015 : 2.3 oz
016 : 2.4 oz
017 : 2.5 oz
018 : 2.6 oz
019 : 2.7 oz
020 : 2.8 oz
021 : 2.9 oz
022 : 3 oz
023 : 3.1 oz
024 : 3.2 oz
025 : 3.3 oz
026 : 3.4 oz
027 : 3.5 oz
028 : 3.6 oz
029 : 3.7 oz
030 : 3.8 oz
031 : 3.9 oz
032 : 4 oz
033 : 4.1 oz
034 : 4.2 oz
035 : 4.3 oz
036 : 4.4 oz
037 : 4.5 oz
038 : 4.6 oz
039 : 4.7 oz
040 : 4.8 oz
041 : 4.9 oz
042 : 5 oz
043 : 5.1 oz
044 : 5.2 oz
045 : 5.3 oz
046 : 5.4 oz
047 : 5.5 oz
048 : 5.6 oz
049 : 5.7 oz
050 : 5.8 oz
051 : 5.9 oz
052 : 6 oz
053 : 6.1 oz
054 : 6.2 oz
055 : 6.3 oz
056 : 6.4 oz
057 : 6.5 oz
058 : 6.6 oz
059 : 6.7 oz
060 : 6.8 oz
061 : 6.9 oz
062 : 7 oz
063 : 7.1 oz
064 : 7.2 oz
065 : 7.3 oz
066 : 7.4 oz
067 : 7.5 oz
068 : 7.6 oz
069 : 7.7 oz
070 : 7.8 oz
071 : 7.9 oz
072 : 8 oz
073 : 8.1 oz
074 : 8.2 oz
075 : 8.3 oz
076 : 8.4 oz
077 : 8.5 oz
078 : 8.6 oz
079 : 8.7 oz
080 : 8.8 oz
081 : 8.9 oz
082 : 9 oz
083 : 9.1 oz
084 : 9.2 oz
085 : 9.3 oz
086 : 9.4 oz
087 : 9.5 oz
088 : 9.6 oz
089 : 9.7 oz
090 : 9.8 oz
091 : 9.9 oz
092 : 10 oz
093 : 10.1 oz
094 : 10.2 oz
095 : 10.3 oz
096 : 10.4 oz
097 : 10.5 oz
098 : 10.6 oz
099 : 10.7 oz
100 : 10.8 oz
101 : 10.9 oz
102 : 11 oz
103 : 11.1 oz
104 : 11.2 oz
105 : 11.3 oz
106 : 11.4 oz
107 : 11.5 oz
108 : 11.6 oz
109 : 11.7 oz
110 : 11.8 oz
111 : 11.9 oz
112 : 12 oz
113 : 12.1 oz
114 : 12.2 oz
115 : 12.3 oz
116 : 12.4 oz
117 : 12.5 oz
118 : 12.6 oz
119 : 12.7 oz
120 : 12.8 oz
121 : 12.9 oz
122 : 13 oz
123 : 13.1 oz
124 : 13.2 oz
125 : 13.3 oz
126 : 13.4 oz
127 : 13.5 oz
128 : 13.6 oz
129 : 13.7 oz
130 : 13.8 oz
131 : 13.9 oz
132 : 14 oz
133 : 14.1 oz
134 : 14.2 oz
135 : 14.3 oz
136 : 14.4 oz
137 : 14.5 oz
138 : 14.6 oz
139 : 14.7 oz
140 : 14.8 oz
141 : 14.9 oz
142 : 15 oz
143 : 15.1 oz
144 : 15.2 oz
145 : 15.3 oz
146 : 15.4 oz
147 : 15.5 oz
148 : 15.6 oz
149 : 15.7 oz
150 : 15.8 oz
151 : 15.9 oz
152 : 16 oz
153 : 16.1 oz
154 : 16.2 oz
155 : 16.3 oz
156 : 16.4 oz
157 : 16.5 oz
158 : 16.6 oz
159 : 16.7 oz
160 : 16.8 oz
161 : 16.9 oz
162 : 17 oz
163 : 18 oz
164 : 19 oz
165 : 20 oz
166 : 21 oz
167 : 22 oz
168 : 23 oz
169 : 24 oz
170 : 25 oz
171 : 26 oz
172 : 27 oz
173 : 28 oz
174 : 29 oz
175 : 30 oz
176 : 31 oz
177 : 32 oz
178 : 33 oz
179 : 34 oz
180 : 64 oz
181 : 128 oz