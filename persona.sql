PGDMP                  	    |            persona    16.4    16.4     �           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            �           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            �           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            �           1262    16595    persona    DATABASE     z   CREATE DATABASE persona WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE_PROVIDER = libc LOCALE = 'Spanish_Spain.1252';
    DROP DATABASE persona;
                postgres    false            �            1259    16604    persona    TABLE     �   CREATE TABLE public.persona (
    id_persona integer NOT NULL,
    nombre character varying(50) NOT NULL,
    apellido character varying(50) NOT NULL,
    telefono character varying(15),
    edad integer
);
    DROP TABLE public.persona;
       public         heap    postgres    false            �            1259    16603    persona_id_persona_seq    SEQUENCE     �   CREATE SEQUENCE public.persona_id_persona_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 -   DROP SEQUENCE public.persona_id_persona_seq;
       public          postgres    false    216            �           0    0    persona_id_persona_seq    SEQUENCE OWNED BY     Q   ALTER SEQUENCE public.persona_id_persona_seq OWNED BY public.persona.id_persona;
          public          postgres    false    215            P           2604    16607    persona id_persona    DEFAULT     x   ALTER TABLE ONLY public.persona ALTER COLUMN id_persona SET DEFAULT nextval('public.persona_id_persona_seq'::regclass);
 A   ALTER TABLE public.persona ALTER COLUMN id_persona DROP DEFAULT;
       public          postgres    false    215    216    216            �          0    16604    persona 
   TABLE DATA           O   COPY public.persona (id_persona, nombre, apellido, telefono, edad) FROM stdin;
    public          postgres    false    216   2       �           0    0    persona_id_persona_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.persona_id_persona_seq', 7, true);
          public          postgres    false    215            R           2606    16609    persona persona_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.persona
    ADD CONSTRAINT persona_pkey PRIMARY KEY (id_persona);
 >   ALTER TABLE ONLY public.persona DROP CONSTRAINT persona_pkey;
       public            postgres    false    216            �   �   x��Kn!�ϧ��؞醻d��i��a��>Do���b\6Zu�����̪<�$ػ�ӡԔ��d<�Gx�����kk9�� �k��v�{K���ae�� �<�!<����o��n�R�҂�����|B�{^�C�ӊh�~Ύ�vK/�J������6�     